$(window).on('load', function() {
  $('#productType').change(function(){
    
    if($(this).val()==="DVD"){$('#form_window').html("<label for='Size'>Size(MB)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'  id='Size'  required name='Size'><div class='checker' id='sizecheck' style='color: red;'>**Please, fill in the size.</div><br>");
    $('#form_window').prop("title","Please provide the size of the DVD in MB")}
    else if($(this).val()==="Furniture"){$('#form_window').html("<label for='Height'>Height(CM)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'  id='Height'  required name='Height'><div class='checker' id='heightcheck' style='color: red;'>**Please, fill in the Height.</div><br><label for='Width'>Width(CM)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'  id='Width'  required name='Width'><div class='checker' id='widthcheck' style='color: red;'>**Please, fill in the Width.</div><br><label for='Length'>Length(CM)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'  id='Length'  required name='Length'><div class='checker' id='lengthcheck' style='color: red;'>**Please, fill in the Length.</div><br>");
    $('#form_window').prop("title","Please provide dimensions in HxWxL format");}
    else if($(this).val()==="Book"){$('#form_window').html("<label for='Weight'>Weight(KG)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$' id='Weight'  required name='Weight'><div class='checker' id='weightcheck' style='color: red;'>**Please Fill the Weight</div><br>");
    $('#form_window').prop("title","Please provide the weight of the book in KG")}
    else {$('#form_window').text("");}
  });
  jQuery.extend(jQuery.expr[':'], {
    invalid : function(elem, index, match){
        var invalids = document.querySelectorAll(':invalid'),
            result = false,
            len = invalids.length;

        if (len) {
            for (var i=0; i<len; i++) {
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
    let regex2 = /^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$/g;
    if($("#SKU").is(":invalid")){
    $('#skucheck').css("display","block");
    $('#skucheck').text("**Please, fill in the SKU.");
    let regex = /[a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z]\d\d\d/i;
    var bla=$("#SKU").val();
    if(!regex.test(bla)&&bla.length!=0){$('#skucheck').text("**Please, enter SKU in the right format, [AAAAAAA000], where AAAAAAA - Product group identificator, 111-Unique product code")}
  }
    else{ $('#skucheck').css("display","none");};

    if($("#Name").is(":invalid")){
    $('#namecheck').css("display","block");}
    else{ $('#namecheck').css("display","none");};

    if($("#Price").is(":invalid")){
    $('#pricecheck').css("display","block");
    $('#pricecheck').text("**Please, fill in the Price.");
    var bla1=$("#Price").val();
    if(!regex2.test(bla1)&&bla1.length!=0){$('#pricecheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#pricecheck').css("display","none");};

    if($("#productType").is(":invalid")){
    $('#productcheck').css("display","block");}
    else{ $('#productcheck').css("display","none");};

    if($("#Size").is(":invalid")){
    $('#sizecheck').css("display","block");
    $('#sizecheck').text("**Please, fill in the Size.");
    var bla2=$("#Size").val();
    if(!regex2.test(bla2)&&bla2.length!=0){$('#sizecheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#sizecheck').css("display","none");};

    if($("#Weight").is(":invalid")){
    $('#weightcheck').css("display","block");
    $('#weightcheck').text("**Please, fill in the Weight.");
    var bla3=$("#Weight").val();
    if(!regex2.test(bla3)&&bla3.length!=0){$('#weightcheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#weightcheck').css("display","none");};

    if($("#Width").is(":invalid")){
    $('#widthcheck').css("display","block");
    $('#widthcheck').text("**Please, fill in the Width.");
    var bla4=$("#Width").val();
    if(!regex2.test(bla4)&&bla4.length!=0){$('#widthcheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#widthcheck').css("display","none");};

    if($("#Length").is(":invalid")){
    $('#lengthcheck').css("display","block");
    $('#lengthcheck').text("**Please, fill in the Length.");
    var bla5=$("#Length").val();
    if(!regex2.test(bla5)&&bla5.length!=0){$('#lengthcheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#lengthcheck').css("display","none");};

    if($("#Height").is(":invalid")){
    $('#heightcheck').css("display","block");
    $('#heightcheck').text("**Please, fill in the Height.");
    var bla6=$("#Height").val();
    if(!regex2.test(bla6)&&bla6.length!=0){$('#heightcheck').text("**Please, enter data of the right type (Number/ Floating Point)")}}
    else{ $('#heightcheck').css("display","none");};
  });
  document.addEventListener('invalid', (function(){
    return function(e) {
    
      e.preventDefault();

    };
})(), true);
 
 });


 



 
 
