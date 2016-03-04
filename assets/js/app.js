

(function($) {
  'use strict';



  $(function() {
    var $fullText = $('.admin-fullText');
    $('#admin-fullscreen').on('click', function() {
      $.AMUI.fullscreen.toggle();
    });

    $(document).on($.AMUI.fullscreen.raw.fullscreenchange, function() {
      $fullText.text($.AMUI.fullscreen.isFullscreen ? '退出全屏' : '开启全屏');
    });
  });

  //erweima.html

  
  $(function() {
    //获取选中选项的值 
    $("#getValue").click(function(){ 
        var valArr = new Array; 
        $("#list :checkbox[checked]").each(function(i){ 
            valArr[i] = $(this).val(); 
        }); 
        var vals = valArr.join(','); 
          alert(vals); 
    }); 
    //全选
    $('#check-all-box').checkAll({ container: $('#table-single'), showIndeterminate: true });
    //打印功能
    var print_input = $("#erweima_print").find('input');
    $("#erweima_print").find('button').tableCheckedReturnValue({table:$("#table-single-tbody"),table_row:2,input:print_input});
    $("#erweima_print").find('button').on('click',function(){
      
      var values = $("#erweima_print").find("input").val();
 
      $("#erweima_print").submit();
    })

    
   

  });

})(jQuery);
//插件作用找到table中所有chackbox选中行某一列的值，返回值为数组
(function ($, window, document) {
  var pluginName = 'tableCheckedReturnValue';

  var defaults = {
    table: null,
    input: null,
    table_row: null
  };

  function x_plugin(element, options) {
    this.$el = $(element);
    this.options = $.extend({}, defaults, options) ;
    this.init();
  }

  x_plugin.prototype.init = function() {
    var opt = this.options;
    var $ele = this.$el;
    $ele.on("click",function(){return_var(opt)});
    function return_var(opt){

      var data=[];
      //data = "'1313123142','1313123143','1313123144','13131231jj45'";
      
      var $tr = opt.table.find("tr");

      $tr.each(function(){
        var that = $(this);

        if(that.find(":checkbox").prop('checked')){
          var text = "'"+that.find("td").eq(opt.table_row).text()+"'";
          data.push(text);
        }
      });
        data.join(",");
      opt.input.val(data);
      
    }
    
    
  };

  // 防止多个实例化
  $.fn[pluginName] = function (options) {
    return this.each(function() {
      if (!$.data(this, 'plugin_' + pluginName)) {
        $.data(this, 'plugin_' + pluginName,
          new x_plugin(this, options));
      }
    });
  }
})(jQuery, window, document);

    //找到需要第几列的值
    
    //返回循环拼接值
    //注入到需要提交的表单