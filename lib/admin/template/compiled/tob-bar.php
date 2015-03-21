<?php
/**
 * Hash : 0f12be031a4ba8a31e6bf918bc61818f4b477e44
 */
?>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="user-info left">
        <li>
            <div class="row collapse">
                <div class="small-1 columns show-for-small">
                    <a id="adminMenu"><span class="fi-list"></span> </a>
                </div>
                <div class="large-3 medium-3 small-3 columns switch round">
                    <span class="avatar switch round" style="background-image: url('../avatar/test.jpg');"></span>
                </div>
                <div class="large-8 medium-8 small-7 columns loginInfo">
                    <?php echo routecms\Routecms::lang("user.welcome.back") ?> <a
                            href="index.php?page=userEdit&amp;userID=<?php echo intval($this->vars['user']->userID) ?>"><?php echo routecms\util\String::HTMLEncode($this->vars['user']->username) ?></a>
                </div>
            </div>
        </li>
    </ul>
    <ul class="right">
        <li><a href="../" class="show-for-medium-up button radius">Back to Mainpage</a></li>
    </ul>
    <ul class="clearfix"></ul>
    <ul class="right">
        <li><a href="../" class="show-for-small-down">Back to Mainpage</a></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
</nav>