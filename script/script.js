$(function(){
    var categoryObject = $('#category');
    var subObject = $('#sub');
   // var districtObject = $('#district');

    // on change province
    categoryObject.on('change', function(){
        var categoryName = $(this).val();

        subObject.html('<option value="">เลือกประเภทสินค้าย่อย</option>');
      //  districtObject.html('<option value="">เลือกตำบล</option>');

        $.get('get_subcategory.php?cat_name=' + categoryName, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                subObject.append(
                    $('<option></option>').val(item.cat_name).html(item.sub_name)
                );
            });
        });
    });

    // on change amphure
    subObject.on('change', function(){
        var subId = $(this).val();

       // districtObject.html('<option value="">เลือกตำบล</option>');
        
        $.get('get_district.php?amphure_id=' + amphureId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                districtObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});