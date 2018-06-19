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
        <div class="am-fl am-cf"><small class="am-text-primary am-text-lg">管理员</small> / <small>administrator</small></div>
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
		                <th class="table-id">ID</th><th class="table-type">类别</th><th class="table-title">管理员账户</th><th class="table-date am-hide-sm-only">密码</th><th class="table-set">操作</th>
		              </tr>
		              </thead>
		              <tbody id="adminPanel">
		              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
			                <td width="6%"><?php echo ($item["id"]); ?></td>
                      <?php if($item["type"] == 1): ?><td width="8%">宗主</td>
                      <?php else: ?>
                        <td width="8%">坛主</td><?php endif; ?>
			                <td class="am-text-nowrap" width="34%"><?php echo ($item["email"]); ?></td>
			                <td class="am-text-nowrap" width="16%">******</td>
			                <td width="38%">
			                  <div class="am-btn-toolbar">
			                    <div class="am-btn-group am-btn-group-xs">
			                      <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-success adminEdit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
			                      <button class="am-btn am-btn-default am-btn-xs am-text-secondary adminAdd"><span class="am-icon-copy"></span> 新增</button>
                            <?php if($item["type"] == 1): ?><button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only adminDelete" disabled="disabled"><span class="am-icon-trash-o"></span> 删除</button>
                            <?php else: ?>
                              <button data-id="<?php echo ($item["id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only adminDelete"><span class="am-icon-trash-o"></span> 删除</button><?php endif; ?>
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
      你，确定要删除这条记录吗？
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
          <input type="text" name="type" id="editType" class="am-form-field" value="坛主" disabled="disabled">
        </div>
        <div class="am-form-group am-form-icon formItem">
          <i class="am-icon-envelope-o"></i>
          <input type="email" name="email" id="editEmail" class="am-form-field editName" value="" disabled="disabled">
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
  var addPanel = $('#add-confirm');
  var addEmail = $('#addEmail');
  var addPassword = $('#addPassword');
  var del;
  var idDom;
  var editPanel = $('#edit-confirm');
  var editPassword = $('#editPassword');
  //add
  $(document).on('click', '.adminAdd', function() {
      addPanel.modal({
        relatedTarget: this,
        onConfirm: function(e) {
          if(verify_emial()){
            addEmail.css('border','1px solid #ccc');
            if(verify_password()){
              addPassword.css('border','1px solid #ccc');
              $.ajax({
                  type:"post",
                  async:false,
                  url:"http://localhost/tp/index.php/Admin/Admin/add",
                  dataType:"json",
                  data:{
                    type: 2,
                    email: addEmail.val(),
                    password: addPassword.val()
                  },
                  success: function(res) {
                    addPanel.modal('close');
                    $('#adminPanel').append("<tr><td>"+res[0].id+"</td><td>坛主</td><td class='am-text-nowrap'>"+res[0].email+"</td><td class='am-text-nowrap'>******</td><td><div class='am-btn-toolbar'><div class='am-btn-group am-btn-group-xs'><button data-id='"+res[0].id+"' class='am-btn am-btn-default am-btn-xs am-text-success adminEdit'><span class='am-icon-pencil-square-o'></span> 编辑</button><button class='am-btn am-btn-default am-btn-xs am-text-secondary adminAdd'><span class='am-icon-copy'></span> 新增</button><button data-id='"+res[0].id+"' class='am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only adminDelete'><span class='am-icon-trash-o'></span> 删除</button></div></div></td></tr>");
                  },
                  error: function(err){
                    console.log(err);
                  }
              });
            }
          }
        },
        onCancel: function(e) {
          addPanel.modal('close');
        }
      });
      $('#add-confirm').off('click.close.modal.amui');
    });

  //delete
  $(document).on('click', '.adminDelete', function() {
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
        url:"http://localhost/tp/index.php/Admin/Admin/del",
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
  $(document).on('click','.adminEdit', function(){
    var id = $(this).attr('data-id');
    $.ajax({
        type:"post",
        async:true,
        url:"http://localhost/tp/index.php/Admin/Admin/edit",
        dataType:"json",
        data:{ id: id },
        success: function(res) {
          $('.editName').val(res[0].email);
          $('#edit-confirm').modal({
            relatedTarget: this,
            onConfirm: function(e) {
              var pass = $('.editPass').val();
              if(pass.length === 6){
                $.ajax({
                    type:"post",
                    async:true,
                    url:"http://localhost/tp/index.php/Admin/Admin/edit2",
                    dataType:"json",
                    data:{
                      id: res[0].id,
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

  function verify_emial(){
    var pattern = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
    var valid = pattern.test(addEmail.val());
    if(addEmail.val() != ''){
      if(valid){
        return true;
      }else{
        addEmail.css('border','1px solid #c82829');
      }
    }else{
      addEmail.css('border','1px solid #c82829');
    }
  }
  function verify_password(){
    if(addPassword.val().length === 6){
      return true;
    }else{
      addPassword.css('border','1px solid #c82829');
    }
  }
});
</script>
</html>