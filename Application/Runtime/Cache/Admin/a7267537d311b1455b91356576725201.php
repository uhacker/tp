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
    <strong>&nbsp;&nbsp;&nbsp;Const</strong> <small>后台管理</small>
  </div>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li>
        <a href="http://localhost/tp/index.php/Admin/Admin/index">
          <span class="am-icon-users"></span>
          <span>管理员&nbsp;&nbsp;&nbsp;</span>
        </a>
      </li>
      <li></li>
    </ul>
  </div>
</header>
<div class="am-cf admin-main">
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
  <div class="am-offcanvas-bar admin-offcanvas-bar">
    <ul class="am-list admin-sidebar-list">
      <li><a href="http://localhost/tp/index.php/Admin/index/index"><span class="am-icon-home"></span> 首页</a></li>
      <li><a href="http://localhost/tp/index.php/Admin/Members/index"><span class="am-icon-user"></span> 会员管理</a></li>
      <li><a href="http://localhost/tp/index.php/Admin/Essay/index"><span class="am-icon-file-word-o"></span> 软文管理</a></li>
    </ul>
  </div>
</div>
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><small class="am-text-primary am-text-lg">软文管理</small> / <small>Essay management</small></div>
      </div>
      <hr/>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-12 am-u-md-pull-12">
		    <div class="admin-content-body">
		      <div class="am-g">
		        <div class="am-u-sm-12">
		            <table class="am-table am-table-striped am-table-hover table-main">
		              <thead>
		              <tr>
		                <th class="table-id">ID</th><th class="table-type">标题</th><th class="table-title">类别</th><th class="table-date am-hide-sm-only">缩略图</th><th class="table-type">浏览量</th><th class="table-type">评论量</th><th class="table-type">时间</th><th class="table-set">操作</th>
		              </tr>
		              </thead>
		              <tbody id="adminPanel">
		              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
			                <td width="6%"><?php echo ($item["id"]); ?></td>
                      <td width="18%"><?php echo ($item["title"]); ?></td>
			                <td class="am-text-nowrap" width="6%"><?php echo ($item["classify"]); ?></td>
			                <td class="am-text-nowrap" width="14%"><img src="<?php echo ($item["image"]); ?>" alt=""></td>
                      <td class="am-text-nowrap" width="7%"><?php echo ($item["look"]); ?></td>
                      <td class="am-text-nowrap" width="7%"><?php echo ($item["discuss"]); ?></td>
                      <td class="am-text-nowrap" width="8%"><?php echo ($item["time"]); ?></td>
			                <td width="34%">
			                  <div class="am-btn-toolbar">
			                    <div class="am-btn-group am-btn-group-xs">
                            <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary essayAdd"><span class="am-icon-copy"></span> 新增</button>
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
    <div class="am-modal-hd">增加软文</div>
    <div class="am-modal-bd">
      <div class="am-u-sm-11 am-form am-u-sm-centered">
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-gavel"></i>
          <input type="text" name="title" id="title" class="am-form-field" value="" placeholser="标题">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-envelope-o"></i>
          <input type="text" name="classify" id="classify" class="am-form-field" value="" placeholder="类别">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="file" name="image" id="image" class="am-form-field" value="" placeholder="图片">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="text" name="look" id="look" class="am-form-field" value="" placeholder="浏览量">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-lock"></i>
          <input type="text" name="discuss" id="discuss" class="am-form-field" value="" placeholder="评论量">
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
  var addPanel = $('#add-confirm');
  //add
  $(document).on('click', '.essayAdd', function() {
      addPanel.modal({
        relatedTarget: this,
        onConfirm: function(e) {
          console.log('success');
        },
        onCancel: function(e) {
          addPanel.modal('close');
        }
      });
      $('#add-confirm').off('click.close.modal.amui');
    });
</script>
</html>