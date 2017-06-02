<?php
if(IN_MANAGER_MODE != "true") {
	die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODX Content Manager instead of accessing this file directly.");
}
if(!$modx->hasPermission('view_eventlog')) {
	$modx->webAlertAndQuit($_lang["error_no_privileges"]);
}

// get id
$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

$ds = $modx->db->select('el.*, IFNULL(wu.username,mu.username) as username', $modx->getFullTableName("event_log") . " el 
		LEFT JOIN " . $modx->getFullTableName("manager_users") . " mu ON mu.id=el.user AND el.usertype=0
		LEFT JOIN " . $modx->getFullTableName("web_users") . " wu ON wu.id=el.user AND el.usertype=1", "el.id='{$id}'");
$content = $modx->db->getRow($ds);

?>

<h1 class="pagetitle"><?php echo $_lang['eventlog']; ?></h1>

<div id="actions">
	<ul class="actionButtons">
		<?php if($modx->hasPermission('delete_eventlog')) { ?>
			<li id="Button3">
				<a href="javascript:;" onclick="deletelog();"><i class="<?php echo $_style["actions_delete"] ?>"></i> <?php echo $_lang['delete']; ?></a>
			</li>
		<?php } ?>
		<li id="Button4">
			<a href="index.php?a=114"><i class="<?php echo $_style["actions_cancel"] ?>"></i> <?php echo $_lang['cancel']; ?></a>
		</li>
	</ul>
</div>

<script language="JavaScript" type="text/javascript">
	function deletelog() {
		if(confirm("<?php echo $_lang['confirm_delete_eventlog']; ?>") === true) {
			document.location.href = "index.php?id=" + document.resource.id.value + "&a=116";
		}
	}
</script>

<form name="resource" method="get">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="a" value="<?php echo $modx->manager->action; ?>" />
	<input type="hidden" name="listmode" value="<?php echo $_REQUEST['listmode']; ?>" />
	<input type="hidden" name="op" value="" />
	<div class="section">
		<div class="sectionHeader"><?php echo $content['source'] . " - " . $_lang['eventlog_viewer']; ?></div>
		<div class="sectionBody">
			<?php
			$date = $modx->toDateFormat($content["createdon"]);
			if($content["type"] == 1) {
				$icon = $_style['actions_info'];
				$msgtype = $_lang["information"];
			} else if($content["type"] == 2) {
				$icon = $_style['actions_triangle'];
				$msgtype = $_lang["warning"];
			} else if($content["type"] == 3) {
				$icon = $_style['actions_error'];
				$msgtype = $_lang["error"];
			}
			?>

			<table border="0" width="100%">
				<tr>
					<td colspan="4">
						<div class="warning"><i class="<?php echo $icon ?>"></i> <?php echo $msgtype ?></div>
						<br />
					</td>
				</tr>
				<tr>
					<td width="25%" valign="top"><?php echo $_lang["event_id"] ?>:</td>
					<td width="25%" valign="top"><?php echo $content["eventid"] ?></td>
					<td width="25%" valign="top"><?php echo $_lang["source"] ?>:</td>
					<td width="25%" valign="top"><?php echo $content["source"] ?></td>
				</tr>
				<tr>
					<td colspan="4">
						<div class='split'>&nbsp;</div>
					</td>
				</tr>
				<tr>
					<td width="25%" valign="top"><?php echo $_lang["date"] ?>:</td>
					<td width="25%" valign="top"><?php echo $date ?></td>
					<td width="25%" valign="top"><?php echo $_lang["user"] ?>:</td>
					<td width="25%" valign="top"><?php echo $content["username"] ?></td>
				</tr>
				<tr>
					<td colspan="4">
						<div class='split'>&nbsp;</div>
					</td>
				</tr>
				<tr>
					<td width="100%" colspan="4"><br />
						<?php echo $content["description"] ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>
