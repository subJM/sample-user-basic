<?= $this->extend(env('DOMAIN_NAME').'backend/layout/pages-layout');  ?>
<?= $this->section('content') ?>
<div class="sub_content_arr">
	 <div class="subTitle_arr">
        <h2>쿠폰함 <small>coupon</small></h2>
    </div>
	<div class="coupon-tiket-arr">
		
	</div>
</div>
<script language="JavaScript" type="text/javascript" src="/html/common/js/coupon.js?1"></script>
<?= $this->endSection() ?>