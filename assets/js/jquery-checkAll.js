// container: A selector string or jQuery object of the element which contains the children checkboxes. Defaults to document.
// childCheckboxes: A selector string or jQuery object of the children checkboxes. Defaults to input[type=checkbox]. Note: if you supply this option, make sure what you’re passing are checkboxes.
// showIndeterminate: a boolean which specifies whether to display the check all checkbox in the indeterminate state if a subset of the children checkboxes are selected.

(function ($, window, document) {
  var pluginName = 'checkAll';
 
  var defaults = {
    container: document,
    childCheckboxes: 'input[type=checkbox]',
    showIndeterminate: false
  };
 
  function checkAll(element, options) {
    this.$el = $(element);
    this.options = $.extend({}, defaults, options) ;
    this.init();
  }
 
  checkAll.prototype.init = function() {
    this._checkChildren();
 
    var plugin = this;
 
    this.$el.on('change', function(e) {
      var $children = $(plugin.options.childCheckboxes, plugin.options.container).not(plugin.$el);
      $children.prop('checked', $(this).prop('checked'));
    });
 
    $(this.options.container).on('change', plugin.options.childCheckboxes, function(e) {
      plugin._checkChildren();
    });
  };
 
  // prevent multiple instantiations
  $.fn[pluginName] = function (options) {
    return this.each(function() {
      if (!$.data(this, 'plugin_' + pluginName)) {
        $.data(this, 'plugin_' + pluginName,
          new checkAll(this, options));
      }
    });
  }
 
  checkAll.prototype._checkChildren = function() {
    var totalCount = $(this.options.childCheckboxes, this.options.container).not(this.$el).length;
    var checkedCount = $(this.options.childCheckboxes,this.options.container)
      .filter(':checked').not(this.$el).length;
 
    var indeterminate = this.options.showIndeterminate &&
      checkedCount > 0 && checkedCount < totalCount;
 
    this.$el.prop('indeterminate', indeterminate);
    this.$el.prop('checked', checkedCount === totalCount);
  }
})(jQuery, window, document);