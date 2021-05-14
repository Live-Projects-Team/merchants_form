<aside class="main-sidebar sidebar-dark-primary elevation-4">
<?php

$base_url = "http://localhost/live-pesa/";
$asset_url = $base_url."assets/";
$upload_url = $base_url."uploads";
$transaction = $base_url."transactions/";
$request = $base_url."requests/";
$agents = $base_url."agents/";
$merchants= $base_url."merchants/";
$normal_users = $base_url."normal users/";
$mail = $base_url."mail/";
$events = $base_url."events/";
$history = $base_url."history/";
$report = $base_url."report/";
$staff = $base_url."staff/";
$setting = $base_url."account setting/";
?>

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo $asset_url; ?>key-img/livepesa-icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">LIVE-PESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $asset_url; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">John Magufuli</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <style>
        i{
          width:20px;
          margin-right: 5px;
        }
      </style>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?php echo $base_url; ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-money-check-alt"></i>
              <p>
               Transactions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $transaction;?>agent_deposit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make agent deposit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>float_transfer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Float transfer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>withdraw_requests.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agent withdraw requests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>main_agent_withdraw.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main agent a withdraw</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>all.withdraw.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All withdraw</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>all.deposits.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All deposits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $transaction;?>all.billpay.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All bill pays</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-user"></i>
              <p>
               Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo $request; ?>agent.request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agent requests</p>
                </a>
                <a href="<?php echo $request; ?>merchant.request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merchant requests</p>
                </a>
                <a href="<?php echo $request; ?>approved.request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved requests</p>
                </a>
                <a href="<?php echo $request; ?>suspended.request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspended requests</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-user"></i>
              <p>
               Agents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo $agents; ?>add.agent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add agents</p>
                </a>
                <a href="<?php echo $agents; ?>update.agent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update agents</p>
                </a>
                <a href="<?php echo $agents; ?>agents.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All agents</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-store"></i>
              <p>
               Merchants
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo $merchants; ?>add.merchant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add merchant</p>
                </a>
                <a href="<?php echo $merchants; ?>update.merchant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update merchant</p>
                </a>
                <a href="<?php echo $merchants; ?>all.merchants.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All merchants</p>
                </a>
                <a href="<?php echo $merchants; ?>active.merchants.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active merchants</p>
                </a>
                <a href="<?php echo $merchants; ?>banned.merchant.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banned merchants</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
               Normal users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $normal_users;?>all.normal.users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $normal_users;?>active.users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $normal_users;?>inactive.users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $normal_users;?>blocked.users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blocked users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-envelope-open"></i>
              <p>
                Mail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $mail;?>new.message.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose a new mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $mail;?>inbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $mail;?>outbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Outbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $mail;?>sent.mails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent mail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $mail;?>marked.important.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marked as important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $mail;?>trash.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-calendar-week"></i>
              <p>
                Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $events;?>new.event.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create a new event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $events;?>undone.evente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Undone events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $events;?>complete.events.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complete events</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-history"></i>
              <p>
                History
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $history;?>deposit.history.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deposits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $history;?>withdraw.history.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Withdraw</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $history;?>billpay.history.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bill pay</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $history;?>balancecheck.history.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Balance check</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-file-alt"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $report;?>new.report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create a new report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $report;?>incomplete.report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Incomplete reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $report;?>complete.report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complete reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $report;?>received.report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Received reports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user-tie"></i>
              <p>
                Staff
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $staff;?>new.staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $staff;?>customer.serv.staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $staff;?>accountants.staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accountants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $staff;?>users.admn.staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users adiminstrators</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $staff;?>transaction.admn.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaction adiminstrator</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-cog"></i>
              <p>
                Account seting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $setting;?>change.password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $setting;?>change.lang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change language</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $setting;?>logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>