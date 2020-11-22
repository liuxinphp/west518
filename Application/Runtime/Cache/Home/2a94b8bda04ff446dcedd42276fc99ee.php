<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
    <title>西安网站制作-做网站-西安网页设计-西安</title>
	<meta name="keywords" content="西安网站维护，西安网站优化，西安网站制作，西安做网站，西安做网页，西安网页制作，西安网站开发，西安企业网站制作，西安网页设计" />
    <meta name="description" content="西安网站制作、做网站、西安网页制作设计-就找西安腾诺网络，我公司是一家集网站制作，网站设计，网页制作，网站推广，网站优化，网站维护等为一体的网络公司，公司秉承以人为本，精益求精的理念，期待与你的合作。" />
</head>
<body>
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
	

    <div class="swiper-container" style="width: 100%">
        <div class="swiper-wrapper">
		  <?php if(is_array($banner_list)): $i = 0; $__LIST__ = $banner_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="/Public/<?php echo ($vo["imgpath"]); ?>" alt="西安网站制作"></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"><img src="/Public/Home/images/re.png" alt="做网站"></div>
        <div class="swiper-button-next"><img src="/Public/Home/images/le.png" alt="西安网页设计"></div>
    </div>
    <div class="fwxm">
        <div class="fwxm1">
            <h3>提供有效的互联网解决方案</h3>
            <p>在这个互联网＋时代，处处电商、微商、微营销、APP，我们专注于互联网产品的创新！<br>
                通过稳扎稳打的项目经验累积，我们致力于为企业提供全面有效的互联网解决方案。秉承与客户双赢的理念，通过互联网将您的声音传向您的客户。</p>

            <div class="fwxm2">
                <ul>
                    <li>
                        <a href="javascript:;">
                            <h3 class="fwxm3">网站建设</h3>
                            <div class="fwxm4">岁月砺金，铸就品牌。我们专注于网站建设，5年的坚持让我们成为了建站专家！</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h3 class="fwxm3">优化排名</h3>
                            <div class="fwxm4">技术成就一个时代，模式引领一个行业。360引擎利于网站排名提升的系统！</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h3 class="fwxm3">微信开发</h3>
                            <div class="fwxm4">我们耕耘于互联网行业，走在微信连接一切的路上，迎来的是全新的世界！</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h3 class="fwxm3">全网营销</h3>
                            <div class="fwxm4">腾诺网络给您带来温馨般服务。我们的团队永远是您网站正常运行的保障队！</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h3 class="fwxm3">APP开发</h3>
                            <div class="fwxm4">多种风格可选，多种形象定制，全新视听冲击，视频向导让您赢在第一印象！</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="alzs">
        <div class="alzs1">
            <h3>案例展示</h3>
            <p>腾诺网络在行业内积累了丰富的实践经验与案例，其中包括企业站、集团站、微网站、电子商城的设计及定制开发。<br>
                截止至2017年底共服务完成上百家客户，并且这一数字还在不断增加。腾诺网络以持续不断的专业化与创新精神引领所涉领域设计进入新的发展历程。</p>
            <div class="alzs2">
                <ul>
				   <?php if(is_array($al_list)): $i = 0; $__LIST__ = $al_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="/alinfo-id-<?php echo ($vo['id']); ?>.html">
                            <img src="/Public/<?php echo ($vo["imgpath"]); ?>" alt="西安网络公司">
                        </a>
                        <div class="alzs3">
                            <a href="/alinfo-id-<?php echo ($vo['id']); ?>.html">
                                <img src="/Public/Home/images/cgo_ind6.png" alt="西安网站推广">
                                <div><?php echo ($vo["title"]); ?></div>
                            </a>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>

<div class="clear"></div>
<div class="inab">
    <div class="inab1">
        <h3>关于我们</h3>
        <p>腾诺网络在行业内积累了丰富的实践经验与案例，其中包括企业站、集团站、微网站、电子商城的设计及定制开发。</p>
        <div class="inab2">
            <div class="inab3">
                <img src="/Public/<?php echo ($about_list["imgpath"]); ?>" alt="西安网页制作">
            </div>
            <div class="inab4">
                <div class="inab5">
                    <?php echo ($about_list["content"]); ?>             
					</div>

                <div class=" qwf">
                    <ul>
                        <li class="do"><a href="/about.html" title="西安网站建设公司">公司简介</a></li>
                        <li><a href="/about.html" title="西安网站开发">公司文化</a></li>
                        <li><a href="/fw.html" title="西安网络公司">服务理念</a></li>
                        <li><a href="/al.html" title="西安网站制作">案例展示</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="clear"></div>
</div>
    <div class="clear"></div>
    <div class="zzlc">
        <div class="zzlc1">
            <h3>优秀的项目是这样出来的</h3>
            <p>优化产品流程，增强产品的易用性，提高使用者的工作效率，科学地组织生产。</p>
            <div class="zzlc3">
                <ul>
                    <li class="zzlc4">
                         <img src="/Public/Home/images/liu1.png" alt="西安小程序开发">
                         <h3>需求沟通</h3>
                        <div>倾听客户需求，了解用户使用环境和操作流程</div>
                    </li>
                    <li class="zzlc5">
                        <img src="/Public/Home/images/liu2.png" alt="西安网站建设">
                    </li>
                    <li class="zzlc4">
                        <img src="/Public/Home/images/liu3.png" alt="西安网站制作">
                        <h3>页面设计</h3>
                        <div>根据客户内容要求，搭建结构图进行页面风格设计</div>
                    </li>
                    <li class="zzlc5">
                        <img src="/Public/Home/images/liu2.png" alt="西安网页制作">
                    </li>
                    <li class="zzlc4">
                        <img src="/Public/Home/images/liu4.png" alt="西安网站建设公司">
                        <h3>前端制作</h3>
                        <div>CSS3、JS、HTML5实现页面动态展示</div>
                    </li>
                    <li class="zzlc5">
                        <img src="/Public/Home/images/liu2.png" alt="西安网站制作公司">
                    </li>
                    <li class="zzlc4">
                        <img src="/Public/Home/images/liu5.png" alt="西安网站开发">
                        <h3>技术开发</h3>
                        <div>移动应用数据对接与开发</div>
                    </li>
                    <li class="zzlc5">
                        <img src="/Public/Home/images/liu2.png" alt="西安小程序开发">
                    </li>
                    <li class="zzlc4">
                        <img src="/Public/Home/images/liu6.png" alt="西安网站制作">
                        <h3>测试反馈</h3>
                        <div>修改调整，规范完善</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="clear"></div>
    <div class="inxe">
        <div class="inxe1">
             <div class="inxe2">
                <div class="inxe3"><h3>知识观点 <i>Knowledge</i><a href="/news.html">MORE>></a><b></b></h3></div>
                 <div class="int">
                     <a href="/newsinfo-id-<?php echo ($newss_list['id']); ?>.html">
                         <img src="/Public/<?php echo ($newss_list["imgpath"]); ?>" alt="西安网络公司">
                     </a>
                     <div>
                         <h3><a href="/newsinfo-id-<?php echo ($newss_list['id']); ?>.html"><?php echo (msubstr($newss_list["title"],0,12)); ?></a></h3>
                         <div><a href="/newsinfo-id-<?php echo ($newss_list['id']); ?>.html"> <?php echo (msubstr($newss_list["content"],0,55)); ?></a></div>
                     </div>
                 </div>
                <div class="inxe41">
                    <ul>
					   <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/newsinfo-id-<?php echo ($vo['id']); ?>.html"><?php echo (msubstr($vo["title"],0,20)); ?></a><span><?php echo date('Y-m-d ',$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </div>

            <div class="inxe2">
                <div class="inxe3"><h3>公司动态 <i>Company dynamics</i><a href="/news.html">MORE>></a><b></b></h3></div>

                <div class="inxe4">
                    <ul>
					  <?php if(is_array($newsa_list)): $i = 0; $__LIST__ = $newsa_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/newsinfo-id-<?php echo ($vo['id']); ?>.html"><?php echo (msubstr($vo["title"],0,20)); ?></a><span><?php echo date('Y-m-d ',$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?> 

                    </ul>
                </div>
            </div>

        </div>
		<div class="clear"></div>
    </div>

<div class="yq">
    <div class="yq1">
        <!--<img src="/Public/Home/images/bott-1.jpg" alt="西安网站推广" class="yq2">-->
		<div class="yq2">友情链接</div>	
		<?php if(is_array($link_list)): $i = 0; $__LIST__ = $link_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a>&nbsp;|&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
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