$(window).on('load', function() {
  function htmlString(val,unit){
  return "<label for='"+val+"'>"+val+"("+unit+")</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'id='"+val+"' required name='"+val+"'><div class='checker' id='"+val.toLowerCase()+"check' style='color: red;'></div><br>";
  }
  const floatingPoint="**Please, enter data of the right type (Number/ Floating Point)";
  $('#productType').change(function(){
    if($(this).val()==="DVD"){$('#form_window').html(htmlString("Size", "MB"));
    $('#form_window').prop("title","Please provide the size of the DVD in MB")}
    else if($(this).val()==="Furniture"){$('#form_window').html(htmlString("Height", "CM")+""+htmlString("Width", "CM")+""+htmlString("Length", "CM"));
    $('#form_window').prop("title","Please provide dimensions in HxWxL format");}
    else if($(this).val()==="Book"){$('#form_window').html(htmlString("Weight", "KG"));
    $('#form_window').prop("title","Please provide the weight of the book in KG")}
    else {$('#form_window').text("");}
  });
  jQuery.extend(jQuery.expr[':'], {
    invalid : function(elem, index, match){
        let invalids = document.querySelectorAll(':invalid'),
            result = false,
            len = invalids.length;

        if (len) {
            for (let i=0; i<len; i++) {
                if (elem === invalids[i]) {
                    result = true;
                    break;
                }
            }
        }
        return result;
    }
});
  $('button[formmethod="post"]').click(function(){
    function showNameMessage (val){if($("#"+val).is(":invalid")){
      $('#'+val.toLowerCase()+'check').css("display","block");
      $('#'+val.toLowerCase()+'check').text("**Please, fill in the "+val+".");}
      else{ $('#'+val.toLowerCase()+'check').css("display","none");}}

      function showNumberMessage (val){if($("#"+val).is(":invalid")){
        $('#'+val.toLowerCase()+'check').css("display","block");
        $('#'+val.toLowerCase()+'check').text("**Please, fill in the "+val+".");
        let bla1=$("#"+val).val();
    if(!regex2.test(bla1)&&bla1.length!=0){$('#'+val.toLowerCase()+'check').text(floatingPoint)}}
        else{ $('#'+val.toLowerCase()+'check').css("display","none");}}

    let regex2 = /^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$/;
    let pattern = $('#SKU').pattern;
    let regex = new RegExp("/${pattern}/gm");
    
    if($("#SKU").is(":invalid")){
    $('#skucheck').css("display","block");
    $('#skucheck').text("**Please, fill in the SKU.");
    let bla=$("#SKU").val();
    if(!regex.test(bla)&&bla.length!=0){$('#skucheck').text("**This SKU is already in the database, please input another SKU.")}}
    else{ $('#skucheck').css("display","none");};

    showNameMessage("Name");

    showNumberMessage("Price")

    if($("#productType option:selected").text()==''){
    $('#productcheck').css("display","block");
    $('#productcheck').text("**Please, fill in the Product type.");}
    else{ $('#productcheck').css("display","none");}

    showNumberMessage("Size")

    showNumberMessage("Weight")

    showNumberMessage("Width")

    showNumberMessage("Length")

    showNumberMessage("Height")
  });
  document.addEventListener('invalid', (function(){
    return function(e) {
    
      e.preventDefault();

    };
})(), true);
 
 });


 



 
 
