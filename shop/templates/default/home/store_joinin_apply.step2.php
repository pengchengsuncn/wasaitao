<?php defined('InShopNC') or exit('Access Invalid!');?>
<script type="text/javascript">
$(document).ready(function(){
    $('#business_licence_address').nc_region();
    
    $('#business_licence_start').datepicker();
    $('#business_licence_end').datepicker();


    $('#form_credentials_info').validate({
        errorPlacement: function(error, element){
            element.nextAll('span').first().after(error);
        },
        rules : {
            business_licence_number: {
                required: true,
                maxlength: 20
            },
            business_licence_address: {
                required: true,
                maxlength: 50
            },
            business_licence_start: {
                required: true
            },
            business_licence_end: {
                required: true
            },
            business_sphere: {
                required: true,
                maxlength: 500
            },
            business_licence_number_electronic: {
                required: true
            },
			id_cart_number_electronic: {
                required: true
            },
			id_cart_number_electronic1: {
                required: true
            }

        },
        messages : {
           business_licence_number: {
                required: '请输入营业执照号',
                maxlength: jQuery.validator.format("最多{0}个字")
            },
            business_licence_address: {
                required: '请选择营业执照所在地',
                maxlength: jQuery.validator.format("最多{0}个字")
            },
            business_licence_start: {
                required: '请选择生效日期'
            },
            business_licence_end: {
                required: '请选择结束日期'
            },
            business_sphere: {
                required: '请填写营业执照法定经营范围',
                maxlength: jQuery.validator.format("最多{0}个字")
            },
            business_licence_number_electronic: {
                required: '请选择上传营业执照号电子版文件'
            },
			id_cart_number_electronic: {
                required: '请选择上传身份证下正面电子版文件'
            },
			id_carte_number_electronic1: {
                required: '请选择上传身份证下反面电子版文件'
            }
        }
    });

    $('#btn_apply_credentials_next').on('click', function() {
        if($('#form_credentials_info').valid()) {
            $('#form_credentials_info').submit();
        }
    });

});
</script>
<!-- 公司资质 -->

<div id="apply_credentials_info" class="apply-credentials-info">
  <div class="note"><i></i>以下所需要上传的电子版资质文件仅支持JPG\GIF\PNG格式图片，大小请控制在1M之内。</div>
  <form id="form_credentials_info" action="index.php?act=store_joinin&op=step3" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0" class="all">
      <thead>
        <tr>
          <th colspan="20">营业执照信息（副本）</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><i>*</i>营业执照号：</th>
          <td><input name="business_licence_number" type="text" class="w200" />
            <span></span></td>
        </tr>
        <tr>
          <th><i>*</i>营业执照所在地：</th>
          <td><input id="business_licence_address" name="business_licence_address" type="hidden" />
            <span></span></td>
        </tr>
        <tr>
          <th><i>*</i>营业执照有效期：</th>
          <td><input id="business_licence_start" name="business_licence_start" type="text" class="w90" />
            <span></span>-
            <input id="business_licence_end" name="business_licence_end" type="text" class="w90" />
            <span></span></td>
        </tr>
        <tr>
          <th><i>*</i>法定经营范围：</th>
          <td><textarea name="business_sphere" rows="3" class="w200"></textarea>
            <span></span></td>
        </tr>
        <tr>
          <th><i>*</i>营业执照号电子版：</th>
          <td><input name="business_licence_number_electronic" type="file" class="w200" />
            <span class="block">请确保图片清晰，文字可辨并有清晰的红色公章。</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="20">&nbsp;</td>
        </tr>
      </tfoot>
    </table>
    
    <table border="0" cellpadding="0" cellspacing="0" class="all">
      <thead>
        <tr>
          <th colspan="20">身份证信息</th>
        </tr>
      </thead>
      <tbody>   
        <tr>
          <th><i>*</i>身份证信息正面：</th>
          <td><input name="id_cart_number_electronic" type="file" class="w200" />
            <span class="block">请确保图片清晰，文字可辨。</span></td>
        </tr>
        <tr>
          <th><i>*</i>身份证信息反面：</th>
          <td><input name="id_cart_number_electronic1" type="file" class="w200" />
            <span class="block">请确保图片清晰，文字可辨。</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="20">&nbsp;</td>
        </tr>
      </tfoot>
    </table>
  </form>
  <div class="bottom"><a id="btn_apply_credentials_next" href="javascript:;" class="btn">下一步</a></div>
</div>
