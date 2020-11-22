<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
    <title><?php echo ($res["title"]); ?>-西安腾诺网络</title>
	<meta name="keywords" content="西安网站建设，西安网站制作，西安网页制作，西安网站建设公司，西安网站制作公司，西安网站开发，西安企业网站制作，西安网络公司，西安软件开发公司，西安小程序制作，西安微信小程序制作，西安公众号开发，西安微信公众号制作，" />
    <meta name="description" content="西安网站制作、做网站、西安网页制作设计-就找西安腾诺网络，我公司是一家集网站制作，网站设计，网页制作，网站推广，网站优化，网站维护等为一体的网络公司，公司秉承以人为本，精益求精的理念，期待与你的合作。" />
    <link rel="stylesheet" href="/Public/Home/css/consulting.css">
    <script src="/Public/Home/js/swiper.min.js"></script>
</head>
<body>
<div class="top">
    <div class="top1">
         <link rel="stylesheet" href="/Public/Home/css/cemmer.css">
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" href="/Public/Home/css/styless.css">
    <link rel="stylesheet" href="/Public/Home/css/ipad.css">
    <link rel="stylesheet" href="/Public/Home/css/swiper.min.css">
    <script src="/Public/Home/js/jquery-1.10.1.min.js"></script>
    <script src="/Public/Home/js/index.js"></script>
    <script src="/Public/Home/js/swiper.min.js"></script>
<?php include_once("baidu_js_push.php") ?>
 <div class="top">
        <div class="top1">
            <div class="top2"><a href="/index.html"><img src="/Public/home/images/logo.png" alt=""></a></div>
            <div class="fen">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="top3">
                <ul>
                    <li><a href="/index.html"><div></div>首页</a></li>
                    <li><a href="/about.html"><div></div>关于</a></li>
                    <li><a href="/fw.html"><div></div>服务</a></li>
                    <li><a href="/al.html"><div></div>案例</a></li>
                    <li><a href="/news.html"><div></div>资讯</a></li>
                    <li><a href="/contact.html"><div></div>联系</a></li>
                </ul>
            </div>
        </div>
    </div>
	
    </div>
</div>
<div class="clear"></div>
    <div class="culinfo">
        <div class="culinfo1">
            <div class="culinfo2">
                <div class="culinfo5">
                    <h3><?php echo (msubstr($res["title"],0,15)); ?></h3>
                    <div class="culinfo4">
                        <a href="javascript:history.go(-1)">返回</a>
                    </div>
                    <p><span>发表时间：<?php echo date('Y-m-d ',$res['time']);?></span><span>浏览次数：<?php echo ($res["liulan"]); ?></span><span>来源：<?php echo ($res["author"]); ?></span></p>
                </div>
                <div class="jies">
                    <?php echo ($res["content"]); ?>
                    
                </div>
                <div class="fh">
                    <span><a href="javascript:history.go(-1)">返回</a></span>
                </div>
                <div class="ye1">
				       <?php if(($prev != '')): ?><a href="/fwinfo-id-<?php echo ($prev['id']); ?>.html" class="ye2">
						<span></span>上一篇：<?php echo ($prev["title"]); ?>
						</a>
						 <?php else: ?>
						  <a class="ye2"><span></span>上一篇:暂没数据</a><?php endif; ?>
					   <?php if(($next != '')): ?><a href="/fwinfo-id-<?php echo ($next['id']); ?>.html" class="ye3">
						 <span></span>下一篇：<?php echo ($next["title"]); ?>
							   </a>
								<?php else: ?>
							 <a class="ye3"><span></span>下一篇:暂没数据</a><?php endif; ?>
				
                    
                </div>
            </div>
            <div class="culinfo3">
                <div class="news_right-title">
                    <h1>资讯推荐</h1>
                    <h2>OUR CASE</h2>
                </div>
                <ul class="zxlb">
				  <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>

                            <a href="/newsinfo-id-<?php echo ($vo['id']); ?>.html">
                                <i>
                                    <span><?php echo date('m ',$vo['time']);?></span>
                                    <em><?php echo date('Y ',$vo['time']);?>年</em>
                                </i>
                                <div  class="zxlb1">
                                    <h3><?php echo (msubstr($vo["title"],0,10)); ?></h3>
                                    <div><?php echo (msubstr($vo["content"],0,25)); ?></div>
                                </div>
                            </a>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="clear">

            </div>
        </div>
    </div>
 <div class="clear"></div>
    <div class="foot">
        <div class="foot1">
            <div class="foot3">
                <div class="foot4">
                    <div class="foot5"><input type="text" placeholder="您的姓名：" class="name"></div>
                    <div class="foot6"><input type="text" placeholder="您的联系手机：" class="tel"></div>
                </div>
                <div class="foot7">
                    <div class="foot8"><input type="text" placeholder="您的邮箱：" class="email"></div>
                    <div class="foot9"><input type="text" placeholder="不输入" class="yzm">

					</div>
                </div>
                <div class="foot10">
                    <textarea placeholder="详情描述：" class="ms"></textarea>
                </div>
                <div class="foot11"><input type="submit" value="提交" class="tj"></div>
            </div>
            <div class="footq">
                <img src="/Public/Home/images/cgo_bot1.png" alt="" class="alq">

                    <div class="dz">地址: 陕西省西安市未央区赛高国际A座28层1 <br>
                        ADD: Address: 28 / f, block A, saigao international, weiyang district, xi 'an, shaanxi province.
                    </div>
                    <div class="zj">
                        TEL: <span><a href="tel:18066528545">18066528545</a></span>
                    </div>
                    <div class="cz">
                        FAX: <span>029-89298792</span>
                    </div>
                    <div class="yx">
                        E-MAIL: <span>229444115@qq.com</span>
                    </div>
                    <div class="wz">
                        WEB: <span>http://www.west518.cn</span>
                    </div>

            </div>
        </div>
        <div class="foot2">
            <div class="foot21">

                <div>Copyright © 2013-2018 www.west518.cn, All Rights Reserved    陕ICP备17015187号-1</div>
            </div>
        </div>
    </div>
    <div class="db">
        <ul>
            <li><a href="/index-index.html">
                <img src="/Public/Home/images/wd.png" alt="">
                <span>网站首页</span>
            </a></li>
            <li><a href="/al-al.html">
                <img src="/Public/Home/images/alx.png" alt="">
                <span>案例展示</span>
            </a></li>
            <li><a href="tel:18066528545">
                <img src="/Public/Home/images/dh.png" alt="">
                <span>电话咨询</span>
            </a></li>
            <li><a href="/contact-contact.html">
                <img src="/Public/Home/images/wz.png" alt="">
                <span>联系我们</span>
            </a></li>
        </ul>
    </div>
    <div class="yb_conct">
        <div class="yb_bar">
            <ul>
                <li class="yb_top">返回顶部</li>
                <li class="yb_phone">029-89298792</li>
                <li class="yb_QQ">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2297725833&amp;site=qq&amp;menu=yes&amp;from=message&amp;isappinstalled=0" title="即刻发送您的需求">市场部</a>
                </li>
                <li class="yb_QQ">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=229444115&amp;site=qq&amp;menu=yes&amp;from=message&amp;isappinstalled=0" title="即刻发送您的需求">技术部 </a>
                </li>
                <li class="yb_QQ">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1023690273&amp;site=qq&amp;menu=yes&amp;from=message&amp;isappinstalled=0" title="即刻发送您的需求">售后服务 </a>
                </li>

            </ul>
        </div>
    </div>
	</body>
<script>
$('.tj').click(function(){
  var name=$('.name').val();
  var tel=$('.tel').val();
  var email=$('.email').val();
  var ms=$('.ms').val();
  var yzm=$('.yzm').val();
  var myreg = /^1[3|4|5|7|8][0-9]\d{4,8}$/;
  if(!name){
     alert('请输入姓名');
	 return false;
   }
  if(!myreg.test(tel)){
     alert('请输入正确的手机号');
	 return false;
   }
   if(!email){
     alert('请输入邮箱');
	 return false;
   }

    if(!ms){
     alert('请输入描述');
	 return false;
   }
    $.ajax({
     url:"/public-massage.html",
	 type:'post',
	 dataType:'',
	 data:{
	   'name':name,
	   'tel':tel,
	   'email':email,
	   'ms':ms,

	 },
	 success:function(re){
	   if(re == 1){
	     alert('留言成功');
		  window.location.reload();
		 return true;
	   }else if(re == 2){
	     alert('留言失败');
		 return false;
	   }else if(re == 3){
	     alert('验证码错误');
		 return false;
	   }
	 }
   })
})
</script>
    <script>

        var myPlugin = {
            name: 'debugger',
            params: {
                debugger: false,
            },
            on: {
                init: function () {
                    if (!this.params.debugger) return;
                    console.log('init');
                },
                click: function (e) {
                    if (!this.params.debugger) return;
                    console.log('click');
                },
                tap: function (e) {
                    if (!this.params.debugger) return;
                    console.log('tap');
                },
                doubleTap: function (e) {
                    if (!this.params.debugger) return;
                    console.log('doubleTap');
                },
                sliderMove: function (e) {
                    if (!this.params.debugger) return;
                    console.log('sliderMove');
                },
                slideChange: function () {
                    if (!this.params.debugger) return;
                    console.log('slideChange', this.previousIndex, '->', this.activeIndex);
                },
                slideChangeTransitionStart: function () {
                    if (!this.params.debugger) return;
                    console.log('slideChangeTransitionStart');
                },
                slideChangeTransitionEnd: function () {
                    if (!this.params.debugger) return;
                    console.log('slideChangeTransitionEnd');
                },
                transitionStart: function () {
                    if (!this.params.debugger) return;
                    console.log('transitionStart');
                },
                transitionEnd: function () {
                    if (!this.params.debugger) return;
                    console.log('transitionEnd');
                },
                fromEdge: function () {
                    if (!this.params.debugger) return;
                    console.log('fromEdge');
                },
                reachBeginning: function () {
                    if (!this.params.debugger) return;
                    console.log('reachBeginning');
                },
                reachEnd: function () {
                    if (!this.params.debugger) return;
                    console.log('reachEnd');
                },
            },
        };
    </script>
    <script>
        // Install Plugin To Swiper
        Swiper.use(myPlugin);

        // Init Swiper
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // Enable debugger
            debugger: true,
        });
    </script>
    <script>
        var aspan=document.getElementsByClassName("spanq")[0];
        function lin() {
            var a=parseInt(Math.random()*10);
            var b=parseInt(Math.random()*10);
            var c=parseInt(Math.random()*10);
            var d=parseInt(Math.random()*10);
            aspan.innerHTML=a+" "+b+" "+c+" "+d;
            aspan.style.background="url(images/te/yz"+a+".jpg) no-repeat center";
            aspan.style.backgroundSize="70px 36px"
        }
        aspan.onclick=lin;
        window.onload=lin
    </script>
    <script>
        $(function() {
            // 悬浮窗口
            $(".yb_conct").hover(function() {
                $(".yb_conct").css("right", "5px");
                $(".yb_bar .yb_ercode").css('height', '200px');
            }, function() {
                $(".yb_conct").css("right", "-127px");
                $(".yb_bar .yb_ercode").css('height', '53px');
            });
            // 返回顶部
            $(".yb_top").click(function() {
                $("html,body").animate({
                    'scrollTop': '0px'
                }, 300)
            });
        });
		
		
    </script>
	<script> var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?b44af84140aff19e8864d4580601f443"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script>