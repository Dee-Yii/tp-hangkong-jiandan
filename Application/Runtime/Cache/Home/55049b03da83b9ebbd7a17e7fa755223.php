<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    <link rel="stylesheet" href="/tp-hangkong/Public/template/assets/css/index.min.css">
  </head>
  <body>
    <div class="wrap">
      <div class="header">
        <div class="clearfix layout">
          <h1><a href="/tp-hangkong/index.php/Home/accountmanage/orgManage">交易管理系统</a></h1>
          <div><a href="/tp-hangkong/index.php/Home/accountmanage/orgManage" class="active">账户管理</a><a href="/tp-hangkong/index.php/Home/clientmanage/clientList">客户管理</a><a href="/tp-hangkong/index.php/Home/countmanage/countTable">结算管理</a><a href="/tp-hangkong/index.php/Home/sysmanage/pwdManage">系统管理</a></div>
        </div>
      </div>
      <div class="main">
        <div class="sidebar"><a href="/tp-hangkong/index.php/Home/clientmanage/clientList" class="active">客户列表</a><a href="/tp-hangkong/index.php/Home/clientmanage/chiCangSearch">持仓查询</a><a href="/tp-hangkong/index.php/Home/clientmanage/pingCangSearch">平仓查询</a><a href="/tp-hangkong/index.php/Home/clientmanage/chuRuJinSearch">出入金查询</a></div>
        <div class="content">
          <div class="control-bar">
            客户信息 &nbsp;&nbsp;<?php echo ($name); ?>
            昵称：<em><?php echo ($userInfo["nickname"]); ?></em>&nbsp;&nbsp; 手机号码：<em><?php echo ($userInfo["phoneNum"]); ?></em>&nbsp;&nbsp;<a href="javascript:;" class="btn">重置密码</a>
          </div>
          <div class="search-bar">
            <label>类型：</label>
            <select name="caopanType">
              <option value="0">买涨</option>
              <option value="1">买跌</option>
            </select>
            <input id="dateStart" type="text" placeholder="开始时间" class="picker"><span>--</span>
            <input id="dateEnd" type="text" placeholder="结束时间" class="picker">
            <input type="text" placeholder="商品名称"><a href="javascript:;" class="btn">查询</a>
          </div>
          <div class="data-container">
            <div class="tab-btns"><a href="/tp-hangkong/index.php/Home/clientmanage/clientListView/buyLog" class="active">购买记录</a><a href="/tp-hangkong/index.php/Home/clientmanage/clientListView/chuRuJinLog">出入金记录</a><a href="/tp-hangkong/index.php/Home/clientmanage/clientListView/wasteBook">资金流水</a><a href="/tp-hangkong/index.php/Home/clientmanage/clientListView/moneyLog">资金记录</a></div>
            <table>
              <tr>
                <th>日期</th>
                <th>订单号</th>
                <th>商品名称</th>
                <th>商品规格</th>
                <th>建仓放向</th>
                <th>手数</th>
                <th>操盘类型</th>
                <th>盈亏</th>
                <th>备注</th>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
              <tr>
                <td>2016-10-12</td>
                <td>AS1223901</td>
                <td>奥斯卡</td>
                <td>1分时</td>
                <td></td>
                <td>6</td>
                <td>买涨</td>
                <td>-100</td>
                <td>买涨</td>
              </tr>
            </table>
            <div class="pagination"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="/tp-hangkong/Public/template/assets/js/vendor/require.js" data-main="/tp-hangkong/Public/template/assets/js/common"></script>
    <script>
      require(['common'], function () {
          require(['page/clientList']);
      });
    </script>
  </body>
</html>