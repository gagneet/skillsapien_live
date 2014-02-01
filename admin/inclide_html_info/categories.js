	CKEDITOR.editorConfig = function( config ){
	    config.language = 'fr';
	    config.uiColor = '#AADC6E';
			
		config.toolbar = 'MyToolbar';

    config.toolbar_MyToolbar =
    [
        ['NewPage','Preview'],
        ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Scayt'],
        ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
        ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
        '/',
        ['Styles','Format'],
        ['Bold','Italic','Strike'],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
        ['Link','Unlink','Anchor'],
        ['Maximize','-','About']
    ];
			
	};
	function disposeElement(_id){
		if ($(_id)){
			$(_id).dispose();	
		}	
	}
	function pageClass(){
		var animations = new Array();
		this.toggler = '';
	
		this.construct_effect = function(){
			$$('tr.row-effect').each(function(el, i){
				el.addEvents({
					'mouseenter': function(){
						el.addClass('tr-hover');
					},
					'mouseleave': function(){	
						el.removeClass('tr-hover');
					},
					'click': function(){
					}
				})
			});
			$$('tr.edit-toggler').each(function(el, i){
				el.addEvents({
					'mouseenter': function(){
						el.addClass('tr-hover');
					},
					'mouseleave': function(){	
						el.removeClass('tr-hover');
					},
					'click': function(){
						var _index = el.getAttribute('rel');
						if (animations[_index] != undefined){
							if (_editor != ''){
								_editor.destroy();	
								_editor = '';
							}
							var _suspend_delete = false;
							if ($('delete_' + _index).getStyle('display') == 'inline' || $('suspend_' + _index).getStyle('display') == 'inline' || $('info_' + _index).getStyle('display') == 'inline'){
								_suspend_delete = true;
							}
							reset_boxes(_index, 'edit');
							
							if (!animations[_index].open || _suspend_delete){	
								reset_animations();
                var _req = new createRequest('ajax/ajax_get.php');
                _req.requestType = 'get-products-form';
                _req.sendRequest('action=get-products-form&index=' + _index + '&id=' + el.id);
								animations[_index].toggle();
							}
							else{
								animations[_index].toggle();
							}
						}
						return false;
					}
				})
			});
			$$('div.users-slide').each(function(el, i){
				var el_animation = new Fx.Slide(el, {
					'duration': 500
				});
				animations[i] = el_animation;
				el_animation.hide();
				
				var _id = el.getAttribute('rel');
				if ($('slide_' + _id) != null){
					$('slide_' + _id).removeClass('hide-slider');
				}
			});
			
			$$('input.checkbox-toggle').each(function(el){
					el.addEvent('click', function(e){
						e.stopPropagation();	
						$('toggle_action_view').setStyle('display', 'none');
					})
			})
			$$('input.product-checkbox-toggle').each(function(el){
					el.addEvent('click', function(e){
						e.stopPropagation();	
						$('toggle_action_view').setStyle('display', 'none');
					})
			})
			
			
			this.suspend();
			this._delete();
			this._edit();
      this._edit_products();
      this.featured_links();
		}
		//Special Actions
		this.selectCheckboxes = function(){
			var _status = $('checkbox_toggler').checked;
			
			$$('input.checkbox-toggle').each(function(el){
					el.checked = _status;
			});
			$('toggle_action_view').setStyle('display', 'none');
		}
		this.selectProductsCheckboxes = function(){	
			var _status = $('product_checkbox_toggler').checked;
			
			$$('input.product-checkbox-toggle').each(function(el){
					el.checked = _status;
			});
			$('toggle_action_view').setStyle('display', 'none');
		}
		this.toggleActionView = function(_id){	
			disposeElement('toggle_action_content');
			disposeElement('toggle_action_error');
			
			var _display = $('toggle_action_view').getStyle('display');
			if (_display == 'none' || this.toggler != _id){
				var _coordinates = $(_id).getCoordinates();
				$('toggle_action_view').setStyles({
					'display': 'block',
					'left': _coordinates['left'],
					'top': _coordinates['top'] + 20
				}),
				$('toggle_action_view').morph({
					'margin-left': 0,
					'width': 150	
				})
			}
			else{
				$('toggle_action_view').setStyle('display', 'none');
			}
			
			this.toggler = _id;
		}
		this.toggleActionViewErrors = function(msg){	
			disposeElement('toggle_action_error');
			var _container = new Element('div',{
				'class': 'error-message',
				'id': 'toggle_action_error',
				'html': msg
			});
			_container.inject($$('ul[class~="action-select"]')[0], 'after');
		}
		this.toggleActionViewHideErrors = function(){
			disposeElement('toggle_action_error');
		}
		this.toggleActionViewSuccess = function(_link){
			document.location.href = _link;	
		}
		this.toggleActionMoveTo = function(){
			disposeElement('toggle_action_content');
			disposeElement('toggle_action_error');
			
			if ($$('input:checked').length > 0){	
				$('toggle_action_view').morph({
					'width': 225,
					'margin-left': '-100'
				})
				var _data = '';
				$$('input.checkbox-toggle:checked').each(function(el){
					_data += el.value + '}';
				})
				var _data1 = '';
				$$('input.product-checkbox-toggle:checked').each(function(el){
					_data1 += el.value + '}';
				})
				var _req = new createRequest('ajax/ajax_get.php');
				_req.requestType = 'get-moveto-content';
				_req.sendRequest('action=get-moveto-content&id=' + _data + '&product_id=' + _data1);
			}
			else{
				var _container = new Element('div',{
					'class': 'error-message',
					'id': 'toggle_action_error',
					'html': 'select a checkbox'
				});
				_container.inject($$('ul[class~="action-select"]')[0], 'after');
			}
		}
		this.toggleActionDelete = function(){
			disposeElement('toggle_action_content');
			disposeElement('toggle_action_error');
			
			if ($$('input:checked').length > 0){	
				$('toggle_action_view').morph({
					'width': 225,
					'margin-left': '-100'
				})
				var _data = '';
				$$('input.checkbox-toggle:checked').each(function(el){
					_data += el.value + '}';
				})
				var _data1 = '';
				$$('input.product-checkbox-toggle:checked').each(function(el){
					_data1 += el.value + '}';
				})
				var _req = new createRequest('ajax/ajax_get.php');
				_req.requestType = 'get-delete-content';
				_req.sendRequest('action=get-delete-content&id=' + _data + '&product_id=' + _data1);
			}
			else{
				var _container = new Element('div',{
					'class': 'error-message',
					'id': 'toggle_action_error',
					'html': 'select a checkbox'
				});
				_container.inject($$('ul[class~="action-select"]')[0], 'after');
			}
		}
		//
		this.suspend = function(){
			$$('a.suspend-toggler').each(function(el){
				el.addEvent('click', function(e){
					e.stop();
					var _index = el.getAttribute('rel');
					if (_editor != ''){
						_editor.destroy();	
						_editor = '';
					}
					reset_boxes(_index, 'suspend');
					reset_animations();
					animations[_index].toggle();
					return false;	
				})	
			})
		}
		this._delete = function(){
			$$('a.delete-toggler').each(function(el){
				el.addEvent('click', function(e){
					e.stop();
					var _index = el.getAttribute('rel');
					if (_editor != ''){
						_editor.destroy();	
						_editor = '';
					}
					reset_boxes(_index, 'delete');
					reset_animations();
					animations[_index].toggle();
					return false;	
				})	
			})
		}
		
		this._edit = function(){
			$$('a.edit-toggler').each(function(el){
				el.addEvent('click', function(e){
					e.stop();
						var _index = el.getAttribute('rel');
						if (animations[_index] != undefined){
							if (_editor != ''){
								_editor.destroy();	
								_editor = '';
							}
							var _suspend_delete = false;
							if ($('delete_' + _index).getStyle('display') == 'inline' || $('suspend_' + _index).getStyle('display') == 'inline' || $('info_' + _index).getStyle('display') == 'inline'){
								_suspend_delete = true;
							}
							reset_boxes(_index, 'edit');

							if (!animations[_index].open || _suspend_delete){	
								reset_animations();
                var _req = new createRequest('ajax/ajax_get.php');
                _req.requestType = 'get-category-form';
                _req.sendRequest('action=get-category-form&index=' + _index + '&id=' + el.id);
								animations[_index].toggle();
							}
							else{
								animations[_index].toggle();
							}
						}
						return false;
				})	
			})
		}

		this._edit_products = function(){
			$$('a.edit-product-toggler').each(function(el){
				el.addEvent('click', function(e){
					e.stop();
						var _index = el.getAttribute('rel');
						if (animations[_index] != undefined){
							if (_editor != ''){
								_editor.destroy();
								_editor = '';
							}
							var _suspend_delete = false;
							if ($('delete_' + _index).getStyle('display') == 'inline' || $('suspend_' + _index).getStyle('display') == 'inline' || $('info_' + _index).getStyle('display') == 'inline'){
								_suspend_delete = true;
							}
							reset_boxes(_index, 'edit');

							if (!animations[_index].open || _suspend_delete){
								reset_animations();
                var _req = new createRequest('ajax/ajax_get.php');
                _req.requestType = 'get-products-form';
                _req.sendRequest('action=get-products-form&index=' + _index + '&id=' + el.id);
								animations[_index].toggle();
							}
							else{
								animations[_index].toggle();
							}
						}
						return false;
				})
			})
		}


		this.edit_hideErrors = function(_index){
			if ($('display_errors_' + _index) != null){	
				$('display_errors_' + _index).dispose();
			}
		}
		this.edit_displayErrors = function(_index, _errorMsg){
			var _container = new Element('div',{
				'class': 'error-message',
				'html': _errorMsg,
				'id': 'display_errors_' + _index	
			});
			_container.inject($('inner_container_edit_' + _index), 'top');
		}
		this.edit_displaySuccess = function(_index, _id, msg){
			var _container = new Element('div', {
				'id': 'inner_container_edit_' + _index,
				'html': '<div class="confirm-text">' + msg + '</div><div style="font-size: 1px; height: 10px;">&nbsp;</div><div><input class="action-input" type="Button" value="Close" onclick="javascript: current_page.close_animation(' + _index + ')"></div>'
			});
			if (_editor != ''){
				_editor.destroy();	
				_editor = '';
			}
			_container.replaces($('inner_container_edit_' + _index));
		}
    this._new_category = function(parent_id){
			if (_editor != ''){
				_editor.destroy();
				_editor = '';
			}
			reset_animations();
			var _req = new createRequest('ajax/ajax_get.php');
			_req.requestType = 'get-category-form';
			_req.sendRequest('action=get-category-form-new&index=' + (animations.length - 1) + '&id=&parent_id=' + parent_id);
			animations[animations.length - 1].toggle();
		}
		this._new_product = function(parent_id){
			if (_editor != ''){
				_editor.destroy();	
				_editor = '';
			}
			reset_animations();
			var _req = new createRequest('ajax/ajax_get.php');
			_req.requestType = 'get-products-form';
			_req.sendRequest('action=get-products-form-new&index=' + (animations.length - 1) + '&id=&parent_id=' + parent_id);
			animations[animations.length - 1].toggle();			
		}
		this.new_displaySuccess = function(_index, msg){
			var _location = window.location.href;
			var _container = new Element('div', {
				'id': 'inner_container_edit_' + _index,
				'html': '<div class="confirm-text">' + msg + '</div><div style="font-size: 1px; height: 10px;">&nbsp;</div><div><input class="action-input" type="Button" value="Close" onclick="javascript: window.location.href=\'' + _location + '\'"></div>'
			});
			if (_editor != ''){
				_editor.destroy();
				_editor = '';
			}
			_container.replaces($('inner_container_edit_' + _index));
		}
		
		
		reset_animations = function(){
			if ($('inner_container_edit_' + _last_edited_index) != null && _last_edited_index >= 0){
				var _container = new Element('div', {
					'id': 'replace_marker_' + _last_edited_index,
					'styles': {
						'text-align': 'center'	
					},
					'html': '<img src="images/ajax_loader.gif" border="0">'
				})
				_container.replaces($('inner_container_edit_' + _last_edited_index));	
				_last_edited_index = -1;
			}
			if (_editor != ''){
				_editor.destroy();	
				_editor = '';
			}
			animations.each(function(el){
				el.hide();
			});
		}
		
		this.close_animation = function(_index){
			animations[_index].toggle();
			if ($('inner_container_edit_' + _index) != null ){
				if (_editor != ''){
					_editor.destroy();	
					_editor = '';
				}
				var _container = new Element('div', {
					'id': 'replace_marker_' + _index,
					'styles': {
						'text-align': 'center'	
					},
					'html': '<img src="images/ajax_loader.gif" border="0">'
				})
				_container.replaces($('inner_container_edit_' + _index));	
			}
		}

    this.featured_links = function(){
      $$('a.featured-links').each(function(el){
        el.addEvent('click', function(e){
          e.stop();
          window.location.href = el.href;
        })
      })
    }
		
		reset_boxes = function(_index, _open){
			if ($('info_' + _index) != null && _open == 'info'){	
				$('info_' + _index).setStyle('display', 'inline');
			}
			else if ($('info_' + _index) != null){	
				$('info_' + _index).setStyle('display', 'none');
			}
			
			if ($('delete_' + _index) != null && _open == 'delete'){	
				$('delete_' + _index).setStyle('display', 'inline');
			}
			else if ($('delete_' + _index) != null){	
				$('delete_' + _index).setStyle('display', 'none');
			}
			
			if ($('suspend_' + _index) != null && _open == 'suspend'){	
				$('suspend_' + _index).setStyle('display', 'inline');
			}
			else if ($('suspend_' + _index) != null){	
				$('suspend_' + _index).setStyle('display', 'none');
			}
			
			if ($('edit_' + _index) != null && _open == 'edit'){	
				$('edit_' + _index).setStyle('display', 'inline');
			}
			else if ($('edit_' + _index) != null){	
				$('edit_' + _index).setStyle('display', 'none');
			}
			
			if ($('network_' + _index) != null && _open == 'network'){	
				$('network_' + _index).setStyle('display', 'inline');
			}
			else if ($('network_' + _index) != null){	
				$('network_' + _index).setStyle('display', 'none');
			}
			
			if ($('network_linkedin_' + _index) != null){	
				$('network_linkedin_' + _index).setStyle('display', 'none');
			}
			if ($('network_facebook_' + _index) != null){	
				$('network_facebook_' + _index).setStyle('display', 'none');
			}
			if ($('network_twitter_' + _index) != null){	
				$('network_twitter_' + _index).setStyle('display', 'none');
			}
			
		}
		
	}

	var current_page = new pageClass();
	window.addEvent('domready', function(){
		current_page.construct_effect();
	})
