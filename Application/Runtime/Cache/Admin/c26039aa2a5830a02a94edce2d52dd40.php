<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Const后台管理</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <script type="text/javascript" src="http://localhost/tp/Application/Admin/Public/common/jquery-1.8.3.min.js"></script>
  <script src="http://localhost/tp/Application/Admin/Public/assets/js/amazeui.min.js"></script>
  <script src="http://localhost/tp/Application/Admin/Public/assets/js/app.js"></script>
  <link rel="icon" type="image/png" href="http://localhost/tp/Application/Admin/Public/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="http://localhost/tp/Application/Admin/Public/assets/i/app-icon72x72@2x.png">
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="http://localhost/tp/Application/Admin/Public/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>Const</strong> <small>后台管理</small>
  </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li>
        <a href="http://localhost/tp/index.php/Admin/Admin/index">
          <span class="am-icon-users"></span>
          <span>管理员</span>
        </a>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<div class="am-cf admin-main">
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
  <div class="am-offcanvas-bar admin-offcanvas-bar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="admin-index.html"><span class="am-icon-home"></span>wesrgfsd 首页</a></li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
          <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
          <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
          <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
        </ul>
      </li>
      <li><a href="http://localhost/tp/index.php/Admin/Members/index"><span class="am-icon-user"></span> 会员管理</a></li>
      <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
      <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
    </ul>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-bookmark"></span> 公告</p>
        <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
      </div>
    </div>

    <div class="am-panel am-panel-default admin-sidebar-panel">
      <div class="am-panel-bd">
        <p><span class="am-icon-tag"></span> wiki</p>
        <p>Welcome to the Amaze UI wiki!</p>
      </div>
    </div>
  </div>
</div>
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">会员管理</strong> / <small>Member management</small></div>
      </div>
      <hr/>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
          <div class="am-panel am-panel-default">
            <div class="am-panel-bd">
              <div class="am-g">
                <div class="am-u-md-4">
                  <img class="am-img-circle am-img-thumbnail" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/200/h/200/q/80" alt=""/>
                </div>
                <div class="am-u-md-8">
                  <p>你可以使用<a href="#">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
                  <form class="am-form">
                    <div class="am-form-group">
                      <input type="file" id="user-pic">
                      <p class="am-form-help">请选择要上传的文件...</p>
                      <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="am-panel am-panel-default">
            <div class="am-panel-bd">
              <div class="user-info">
                <p>等级信息</p>
                <div class="am-progress am-progress-sm">
                  <div class="am-progress-bar" style="width: 60%"></div>
                </div>
                <p class="user-info-order">当前等级：<strong>LV8</strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
              </div>
              <div class="user-info">
                <p>信用信息</p>
                <div class="am-progress am-progress-sm">
                  <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
                </div>
                <p class="user-info-order">信用等级：正常当前 信用积分：<strong>80</strong></p>
              </div>
            </div>
          </div>

        </div>

        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
		    <div class="admin-content-body">
		      <div class="am-g">
		        <div class="am-u-sm-12">
		            <table class="am-table am-table-striped am-table-hover table-main">
		              <thead>
		              <tr>
		                <th class="table-id">ID</th><th class="table-type">级别</th><th class="table-title">账户</th><th class="table-date am-hide-sm-only">密码</th><th class="table-type">状态</th><th class="table-set">操作</th>
		              </tr>
		              </thead>
		              <tbody id="adminPanel">
		              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
			                <td width="6%"><?php echo ($item["id"]); ?></td>
		                      <?php if($item["level"] == 1): ?><td width="8%">高级</td>
		                      <?php elseif($item["level"] == 2): ?>
		                        <td width="8%">一般</td>
		                      <?php elseif($item["level"] == 3): ?>
		                        <td width="8%">普通</td><?php endif; ?>
			                <td class="am-text-nowrap" width="22%"><?php echo ($item["account"]); ?></td>
			                <td class="am-text-nowrap" width="20%">......</td>
			                <?php if($item["status"] == 0): ?><td class="am-text-nowrap" width="10%">活跃</td>
			                <?php elseif($item["status"] == 1): ?>
			                  <td class="am-text-nowrap" width="10%" style="opacity:0.5">禁用</td><?php endif; ?>
			                <td width="34%">
			                  <div class="am-btn-toolbar">
			                    <div class="am-btn-group am-btn-group-xs">
				                    <?php if($item["status"] == 0): ?><button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs userActive"><span class="am-icon-copy"></span> 禁用</button>
				                    <?php else: ?>
				                      <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary userActive"><span class="am-icon-copy"></span> 激活</button><?php endif; ?>
			                      <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-success userEdit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
	                              <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only userDelete"><span class="am-icon-trash-o"></span> 删除</button>
			                    </div>
			                  </div>
			                </td>
			              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		              </tbody>
		            </table>
		            <hr />
		        </div>
		      </div>
		    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--增加-->
<div class="am-modal am-modal-confirm" tabindex="-1" id="add-confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">增加管理员</div>
    <div class="am-modal-bd">
      <div class="am-u-sm-11 am-form am-u-sm-centered">
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-gavel"></i>
          <input type="text" name="addType" id="addType" class="am-form-field" value="坛主" disabled="disabled">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-envelope-o"></i>
          <input type="email" name="addEmail" id="addEmail" class="am-form-field" value="" placeholder="Email">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="password" name="addPassword" id="addPassword" class="am-form-field" value="" placeholder="Password">
        </div>
      </div>
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm id="save">保存</span>
    </div>
  </div>
</div>
<!--删除-->
<div class="am-modal am-modal-confirm" tabindex="-1" id="delete-confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">Const</div>
    <div class="am-modal-bd">
      你，确定要删除这个用户吗？
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>
<!--编辑-->
<div class="am-modal am-modal-confirm" tabindex="-1" id="edit-confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">Const</div>
    <div class="am-modal-bd">
      <div class="am-u-sm-11 am-form am-u-sm-centered">
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-gavel"></i>
          <input type="text" name="type" id="editType" class="am-form-field editLevel" value="">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-envelope-o"></i>
          <input type="email" name="email" id="editEmail" class="am-form-field editName" value="">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="password" name="password" id="editPassword" class="am-form-field editPass" value="******" placeholder="Password">
        </div>
      </div>
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>保存</span>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
	var act = $('.userActive');
	var del;
	var idDom;
	var editPanel = $('#edit-confirm');
	var editPassword = $('#editPassword');

	//active
	act.bind('click', function(){
		var that = $(this);
		var id = that.data()['id'];
	    $.ajax({
	        type:"post",
	        async:true,
	        url:"http://localhost/tp/index.php/Admin/Members/active",
	        dataType:"json",
	        data:{ id: id },
	        success: function(res) {
	        	if(res == 0){
	        		that.removeClass('am-text-secondary').html('<span class="am-icon-copy"></span>' + ' 禁用');
	        		that.parents("td").prev().text('活跃').css('opacity','1');
	        	}else if(res == 1){
	        		that.addClass('am-text-secondary').html('<span class="am-icon-copy"></span>' + ' 激活');
	        		that.parents("td").prev().text('禁用').css('opacity','0.5');
	        	}
	        },
	        error: function(err){
	          console.log(err);
	        }
	    });
	});
  //delete
  $(document).on('click', '.userDelete', function() {
    del = $(this).attr('data-id');
    idDom = $(this).parents('tr');
      $('#delete-confirm').modal({
        onConfirm: function() {
          goDelete();
        }
      });
    });

  function goDelete(){
    $.ajax({
        type:"post",
        async:true,
        url:"http://localhost/tp/index.php/Admin/Members/del",
        dataType:"json",
        data:{ id: del },
        success: function(res) {
          if(res){
            idDom.remove();
          }
        },
        error: function(err){
          console.log(err);
        }
    });
  }
  //edit
  $(document).on('click','.userEdit', function(){
    var id = $(this).attr('data-id');
    $.ajax({
        type:"post",
        async:true,
        url:"http://localhost/tp/index.php/Admin/Members/edit",
        dataType:"json",
        data:{ id: id },
        success: function(res) {
          $('.editLevel').val(res[0].level);
          $('.editName').val(res[0].account);
          $('.editPass').val(res[0].password);
          $('#edit-confirm').modal({
            relatedTarget: this,
            onConfirm: function(e) {
              var level = $('.editLevel').val();
              var account = $('.editName').val();
              var pass = $('.editPass').val();
              if(pass.length === 6){
                $.ajax({
                    type:"post",
                    async:true,
                    url:"http://localhost/tp/index.php/Admin/Members/edit2",
                    dataType:"json",
                    data:{
                      id: res[0].id,
                      level : level,
                      account : account,
                      password : pass
                    },
                    success: function(res){
                      editPanel.modal('close');
                      console.log(res);
                    }
                });
              }else{
                editPassword.css('border','1px solid #c82829');
              }
            },
            onCancel: function(e) {
              editPanel.modal('close');
            }
          });
          $('#edit-confirm').off('click.close.modal.amui');
        }
    });
  });

 });
</script>
</html>