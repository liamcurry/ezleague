<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>

        <div id="page-wrapper">
        <?php 
        	if( isset( $_GET['page'] ) ) {
        		$page = trim( $_GET['page'] );
        		
        		switch( $page ) {
        			case 'games':
        				include('tpls/settings/games.php');
        				break;
        				
        			case 'admins':
        				include('tpls/settings/admins.php');
        				break;
        				
        			case 'site':
        				include('tpls/settings/site.php');
        				break;
        				
        			case 'profile':
        				include('tpls/settings/profile.php');
        				break;
        				
        			case 'social_networks':
        				include('tpls/settings/social-networks.php');
        				break;

                    case 'twitter':
                        include('tpls/settings/twitter.php');
                        break;
        			
        			default:
        				break;
        		}
        		
        	} else {
        		include('tpls/settings/games.php');
        	}
        ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="delete-game-confirm" title="Delete game?" style="display:none;">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>All corresponding league <em>match, season, schedule &amp; other</em> data will permanently deleted.</p>
	</div>
	<div id="delete-admin-confirm" title="Delete admin?" style="display:none;">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Confirm deleting this admin account.</p>
	</div>
    
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <script src="js/ezleague/settings.js"></script>
    <script src="js/ezleague/users.js"></script>
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
	<script>
	CKEDITOR.replace( 'content', {
		toolbar: [
			[ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
			[ 'FontSize', 'TextColor', 'BGColor' ]
		]
	});
	</script>
</body>

</html>
