<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
    <title>服务范围</title>
    <meta name="keywords" content="西安网站维护，西安网站优化，西安网站制作，西安做网站，西安做网页，西安网页制作，西安网站开发，西安企业网站制作，西安网页设计" />
    <meta name="description" content="西安网站制作、做网站、西安网页制作设计-就找西安腾诺网络，我公司是一家集网站制作，网站设计，网页制作，网站推广，网站优化，网站维护等为一体的网络公司，公司秉承以人为本，精益求精的理念，期待与你的合作。" />
    
    <link rel="stylesheet" href="/Public/Home/css/service.css">
</head>
<body>
<div class="top">
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
<div class="re">
</div>

<div class="ser">
    <div class="ser1">
        <h3>我们做什么？</h3>
        <p>应您所求，供您所需，专注技术，创新设计，为企业提供高端个性定制化建站服务。<br>
            构建安全，高效的HTML5响应式网站，随心而变，一次实施，全网应用——颠覆传统应用模板，开启移动端设计革命。<br>
            提供高端定制服务，针对微网站、电商平台提供一条龙解决方案。</p>

        <div class="ser2">
            <ul class="ser3">
                <li class="cy"><span class="img_1"></span>展示型网站</li>
                <li><span class="img_2"></span>集团型网站</li>
                <li><span class="img_3"></span>电商网站</li>
                <li><span class="img_4"></span>手机/微网站</li>
                <li><span class="img_5"></span>基础服务</li>
            </ul>
        </div>
        <div class="ser4">
            <div class="ser5">
                <div class="ser6">
                    <img src="/Public/<?php echo ($resa["imgpath"]); ?>" alt="西安网站制作">
                </div>
                <div class="ser7">
                    <h3><?php echo (msubstr($resa["title"],0,15)); ?></h3>
                    <div class="ser8"><?php echo ($resa["content"]); ?></div>
                    <span class="ser9"><a href="/fwinfo-id-<?php echo ($resa['id']); ?>.html">查看详情 > ></a></span>
                </div>
            </div>
            <div class="ser5" style="display: none">
                <div class="ser6">
                    <img src="/Public/<?php echo ($resb["imgpath"]); ?>" alt="西安网络公司">
                </div>
                <div class="ser7">
                    <h3><?php echo (msubstr($resb["title"],0,15)); ?></h3>
                    <div class="ser8"><?php echo ($resb["content"]); ?></div>
                    <span class="ser9"><a href="/fwinfo-id-<?php echo ($resb['id']); ?>.html">查看详情 > ></a></span>
                </div>
            </div>
            <div class="ser5" style="display: none">
                 <div class="ser6">
                    <img src="/Public/<?php echo ($resc["imgpath"]); ?>" alt="西安网站推广">
                </div>
                <div class="ser7">
                    <h3><?php echo (msubstr($resc["title"],0,15)); ?></h3>
                    <div class="ser8"><?php echo ($resc["content"]); ?></div>
                    <span class="ser9"><a href="/fwinfo-id-<?php echo ($resc['id']); ?>.html">查看详情 > ></a></span>
                </div>
            </div>
            <div class="ser5" style="display: none">
                 <div class="ser6">
                    <img src="/Public/<?php echo ($resd["imgpath"]); ?>" alt="西安小程序开发">
                </div>
                <div class="ser7">
                    <h3><?php echo (msubstr($resd["title"],0,15)); ?></h3>
                    <div class="ser8"><?php echo ($resd["content"]); ?></div>
                    <span class="ser9"><a href="/fwinfo-id-<?php echo ($resd['id']); ?>.html">查看详情 > ></a></span>
                </div>
            </div>
            <div class="ser5" style="display: none">
                <div class="ser6">
                    <img src="/Public/<?php echo ($rese["imgpath"]); ?>" alt="西安网站建设">
                </div>
                <div class="ser7">
                    <h3><?php echo (msubstr($rese["title"],0,15)); ?></h3>
                    <div class="ser8"><?php echo ($rese["content"]); ?></div>
                    <span class="ser9"><a href="/fwinfo-id-<?php echo ($rese['id']); ?>.html">查看详情 > ></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(function () {
        $(".ser4>div:not(:first)").hide()
        $(".ser3>li").hover(function () {
            $(this).addClass("cy").siblings().removeClass("cy")

            var $index=$(this).index();
            $(this).addClass("but").siblings().removeClass("but")


            $(".ser4>div").eq($index).show().siblings().hide()

        })
    })


</script>
<div class="clear"></div>
<div class="zzlc">
    <div class="zzlc1">
        <h3>优秀的项目是这样出来的</h3>
        <p>优化产品流程，增强产品的易用性，提高使用者的工作效率，科学地组织生产。</p>
        <div class="zzlc3">
            <ul>
                <li class="zzlc4">
                    <img src="/Public/Home/images/liu1.png" alt="西安网站制作">
                    <h3>需求沟通</h3>
                    <div>倾听客户需求，了解用户使用环境和操作流程</div>
                </li>
                <li class="zzlc5">
                    <img src="/Public/Home/images/liu2.png" alt="西安网页制作">
                </li>
                <li class="zzlc4">
                    <img src="/Public/Home/images/liu3.png" alt="西安网站建设公司">
                    <h3>页面设计</h3>
                    <div>根据客户内容要求，搭建结构图进行页面风格设计</div>
                </li>
                <li class="zzlc5">
                    <img src="/Public/Home/images/liu2.png" alt="西安网站制作公司">
                </li>
                <li class="zzlc4">
                    <img src="/Public/Home/images/liu4.png" alt="西安网站开发">
                    <h3>前端制作</h3>
                    <div>CSS3、JS、HTML5实现页面动态展示</div>
                </li>
                <li class="zzlc5">
                    <img src="/Public/Home/images/liu2.png" alt="西安网站制作">
                </li>
                <li class="zzlc4">
                    <img src="/Public/Home/images/liu5.png" alt="西安网络公司">
                    <h3>技术开发</h3>
                    <div>移动应用数据对接与开发</div>
                </li>
                <li class="zzlc5">
                    <img src="/Public/Home/images/liu2.png" alt="西安网站推广">
                </li>
                <li class="zzlc4">
                    <img src="/Public/Home/images/liu6.png" alt="西安小程序开发">
                    <h3>测试反馈</h3>
                    <div>修改调整，规范完善</div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="ln">
    <div class="ln1">
        <h3>我们力推“快速化”的产品理念</h3>
        <p>我们了解中小企业发展对企业网站的迫切需求，筛选了一批精致的HTML5+CSS3成套网站产品，让您的企业建站更快捷、更迅速。<br>
            作为大客户，我们团队将提供更优质的定制解决方案，提升企业形象及品牌影响力！</p>
        <div class="wrap">
            <ul>
                <li>
                   <div class="solu_img"><img src="/Public/Home/images/cgo_ind29.png" alt="网站建设套餐"><h2>¥ 3800元</h2><p>快速建站套餐</p></div>
                   <div class="solu_tex"><p>包含：<br>域名、空间、标准模版一套（<span>立即选择</span>）、含新闻、产品常规后台发布系统，免费网站备案及1年免费维护。</p></div>
                </li>
                <li>
                    <div class="solu_img"><img src="/Public/Home/images/cgo_ind30.png" alt="高端网站定制开发"><h2>¥ 5800元<span> 起</span></h2><p>高端网站定制</p></div>
                    <div class="solu_tex"><p>包含：<br>域名、空间、高级设计师自定义设计网站页面、含新闻、产品、案例等定制后台发布系统，免费网站备案及1年免费维护。</p></div>
                </li>
                <li>
                    <div class="solu_img"><img src="/Public/Home/images/cgo_ind31.png" alt="微网站开发制作"><h2>¥ 8800元</h2><p>微商城套餐</p></div>
                    <div class="solu_tex"><p>包含：<br>ECTouch（微信商城），采用国际标准HTML5+CSS3研发，完美对接EcShop电商系统，为中小企业提供移动电商解决方案。</p></div>
                </li>
                <li>
                    <div class="solu_img"><img src="/Public/Home/images/cgo_ind32.png" alt="网站定制开发"><h2>更多产品</h2><p>平台定制/众筹/P2P</p></div>
                    <div class="solu_tex"><p>包含：<br>我们可根据客户需求进行定制化开发，P2P在线理财、股权众筹、DIY平台定制、平面设计及摄影等，咨询热线：029-89298792</p></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="gd">
    <div class="gd1">
        <h3>知识观点</h3>
        <div class="gd2">
		    <?php if(is_array($row)): $i = 0; $__LIST__ = $row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="gd3">
                <div class="gd4">
                    <a href="/newsinfo-id-<?php echo ($vo['id']); ?>.html">
                    <div class="gd5"><img src="/Public/<?php echo ($vo["imgpath"]); ?>" alt="西安小程序开发"></div>
                    <div class="gd6">
                        <h3><?php echo (msubstr($vo["title"],0,20)); ?></h3>
                        <span><?php echo date('Y-m-d ',$vo['time']);?></span>
                    </div>
                    </a>
                </div>
                <div class="gd7"><?php echo (msubstr($vo["content"],0,95)); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="clear"></div>
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