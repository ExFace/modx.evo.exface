<?php

define('MODX_API_MODE', true);

include_once("../../../../index.php");

$modx->db->connect();

if(empty ($modx->config)) {
	$modx->getSettings();
}

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') || ($_SERVER['REQUEST_METHOD'] != 'POST')) {
	$modx->sendRedirect($modx->config['site_url']);
}

header('content-type: application/json');

include_once MODX_BASE_PATH . MGR_DIR . '/includes/lang/' . $modx->config['manager_language'] . '.inc.php';

$action = $_REQUEST['a'];

if(isset($action)) {
	switch($action) {
		case '76': {

			if(isset($_REQUEST['tab'])) {
				$sql = '';
				$a = '';
				$role = $_SESSION['mgrRole'];

				if($_REQUEST['tab'] == 0) {
					$a = 16;
					$sql = $modx->db->query('SELECT t1.*, t1.templatename AS name
					FROM ' . $modx->getFullTableName('site_templates') . ' AS t1
					#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
					ORDER BY t1.templatename ASC');

					echo '<li><a href="index.php?a=19" target="main"><i class="fa fa-plus"></i>' . $_lang['new_template'] . '</a></li>';

				} else if($_REQUEST['tab'] == 1) {
					$a = 301;
					$sql = $modx->db->query('SELECT t1.*, IF(t2.templateid,0,1) AS disabled
					FROM ' . $modx->getFullTableName('site_tmplvars') . ' AS t1
					LEFT JOIN ' . $modx->getFullTableName('site_tmplvar_templates') . ' AS t2 ON t1.id=t2.tmplvarid
					#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
					GROUP BY t1.id
					ORDER BY t1.name ASC');

					echo '<li><a href="index.php?a=300" target="main"><i class="fa fa-plus"></i>' . $_lang['new_tmplvars'] . '</a></li>';

				} else if($_REQUEST['tab'] == 2) {
					$a = 78;
					$sql = $modx->db->query('SELECT t1.*
					FROM ' . $modx->getFullTableName('site_htmlsnippets') . ' AS t1
					#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
					ORDER BY t1.name ASC');

					echo '<li><a href="index.php?a=77" target="main"><i class="fa fa-plus"></i>' . $_lang['new_htmlsnippet'] . '</a></li>';

				} else if($_REQUEST['tab'] == 3) {
					$a = 22;
					$sql = $modx->db->query('SELECT t1.*
					FROM ' . $modx->getFullTableName('site_snippets') . ' AS t1
					#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
					ORDER BY t1.name ASC');

					echo '<li><a href="index.php?a=23" target="main"><i class="fa fa-plus"></i>' . $_lang['new_snippet'] . '</a></li>';

				} else if($_REQUEST['tab'] == 4) {
					$a = 102;
					$sql = $modx->db->query('SELECT t1.*
					FROM ' . $modx->getFullTableName('site_plugins') . ' AS t1
					#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
					ORDER BY t1.name ASC');

					echo '<li><a href="index.php?a=101" target="main"><i class="fa fa-plus"></i>' . $_lang['new_plugin'] . '</a></li>';
				}

				if($modx->db->getRecordCount($sql)) {
					while($row = $modx->db->getRow($sql)) {
						if($row['locked'] && $role != 1) continue;

						echo '<li class="' . ($row['disabled'] ? 'disabled' : '') . ($row['locked'] ? ' locked' : '') . '"><a href="index.php?a=' . $a . '&id=' . $row['id'] . '" target="main">' . $row['name'] . ' <small>(' . $row['id'] . ')</small></a></li>';
					}
				}
			}

			break;
		}

		case '75': {
			$a = 12;

			$sql = $modx->db->query('SELECT t1.*, t1.username AS name
				FROM ' . $modx->getFullTableName('manager_users') . ' AS t1
				#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
				ORDER BY t1.username ASC');

			echo '<li><a href="index.php?a=11" target="main"><i class="fa fa-plus"></i>' . $_lang['new_user'] . '</a></li>';

			if($modx->db->getRecordCount($sql)) {
				while($row = $modx->db->getRow($sql)) {
					echo '<li><a href="index.php?a=' . $a . '&id=' . $row['id'] . '" target="main">' . $row['name'] . ' <small>(' . $row['id'] . ')</small></a></li>';
				}
			}

			break;
		}

		case '99': {
			$a = 88;

			$sql = $modx->db->query('SELECT t1.*, t1.username AS name
				FROM ' . $modx->getFullTableName('web_users') . ' AS t1
				#LEFT JOIN ' . $modx->getFullTableName('categories') . ' AS t2 ON t2.id=t1.category
				ORDER BY t1.username ASC');

			echo '<li><a href="index.php?a=87" target="main"><i class="fa fa-plus"></i>' . $_lang['new_web_user'] . '</a></li>';

			if($modx->db->getRecordCount($sql)) {
				while($row = $modx->db->getRow($sql)) {
					echo '<li><a href="index.php?a=' . $a . '&id=' . $row['id'] . '" target="main">' . $row['name'] . ' <small>(' . $row['id'] . ')</small></a></li>';
				}
			}

			break;
		}

		case 'modxTagHelper': {
			$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : false;
			$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : false;

			if($name && $type) {
				switch($type) {
					case 'Snippet':
					case 'SnippetNoCache': {

						$sql = $modx->db->query('SELECT *
						FROM ' . $modx->getFullTableName('site_snippets') . '
						WHERE name="' . $name . '"
						LIMIT 1');

						if($modx->db->getRecordCount($sql)) {
							$row = $modx->db->getRow($sql);
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-code"></i> ' . $row['name']
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-pencil-square-o"></i> ' . $_lang['edit'],
									'onclick' => "modx.openWindow({url: 'index.php?a=22&id=" . $row['id'] . "'})"
								)
							);
							if(!empty($row['description'])) {
								$contextmenu['seperator'] = '';
								$contextmenu['description'] = array(
									'innerHTML' => '<i class="fa fa-info"></i> ' . $row['description']
								);
							}
						} else {
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-code"></i> ' . $name
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-plus"></i> ' . $_lang['new_snippet'],
									'onclick' => "modx.openWindow({url: 'index.php?a=23&itemname=" . $name . "'})"
								)
							);
						}

						break;
					}
					case 'Chunk' : {

						$sql = $modx->db->query('SELECT *
						FROM ' . $modx->getFullTableName('site_htmlsnippets') . '
						WHERE name="' . $name . '"
						LIMIT 1');

						if($modx->db->getRecordCount($sql)) {
							$row = $modx->db->getRow($sql);
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-th-large"></i> ' . $row['name']
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-pencil-square-o"></i> ' . $_lang['edit'],
									'onclick' => "modx.openWindow({url: 'index.php?a=78&id=" . $row['id'] . "'})"
								)
							);
							if(!empty($row['description'])) {
								$contextmenu['seperator'] = '';
								$contextmenu['description'] = array(
									'innerHTML' => '<i class="fa fa-info"></i> ' . $row['description']
								);
							}
						} else {
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-th-large"></i> ' . $name
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-plus"></i> ' . $_lang['new_htmlsnippet'],
									'onclick' => "modx.openWindow({url: 'index.php?a=77&itemname=" . $name . "'})"
								)
							);
						}

						break;
					}
					case 'AttributeValue': {
						$sql = $modx->db->query('SELECT *
						FROM ' . $modx->getFullTableName('site_htmlsnippets') . '
						WHERE name="' . $name . '"
						LIMIT 1');

						if($modx->db->getRecordCount($sql)) {
							$row = $modx->db->getRow($sql);
							$contextmenu = array(
								'header' => array(
									'innerText' => $row['name']
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-pencil-square-o"></i> ' . $_lang['edit'],
									'onclick' => "modx.openWindow({url: 'index.php?a=78&id=" . $row['id'] . "'})"
								)
							);
							if(!empty($row['description'])) {
								$contextmenu['seperator'] = '';
								$contextmenu['description'] = array(
									'innerHTML' => '<i class="fa fa-info"></i> ' . $row['description']
								);
							}
						} else {

							$sql = $modx->db->query('SELECT *
							FROM ' . $modx->getFullTableName('site_snippets') . '
							WHERE name="' . $name . '"
							LIMIT 1');

							if($modx->db->getRecordCount($sql)) {
								$row = $modx->db->getRow($sql);
								$contextmenu = array(
									'header' => array(
										'innerHTML' => '<i class="fa fa-code"></i> ' . $row['name']
									),
									'item' => array(
										'innerHTML' => '<i class="fa fa-pencil-square-o"></i> ' . $_lang['edit'],
										'onclick' => "modx.openWindow({url: 'index.php?a=22&id=" . $row['id'] . "'})"
									)
								);
								if(!empty($row['description'])) {
									$contextmenu['seperator'] = '';
									$contextmenu['description'] = array(
										'innerHTML' => '<i class="fa fa-info"></i> ' . $row['description']
									);
								}
							} else {
								$contextmenu = array(
									'header' => array(
										'innerHTML' => '<i class="fa fa-code"></i> ' . $name
									),
									'item' => array(
										'innerHTML' => '<i class="fa fa-plus"></i> ' . $_lang['new_htmlsnippet'],
										'onclick' => "modx.openWindow({url: 'index.php?a=77&itemname=" . $name . "'})"
									),
									'item2' => array(
										'innerHTML' => '<i class="fa fa-plus"></i> ' . $_lang['new_snippet'],
										'onclick' => "modx.openWindow({url: 'index.php?a=23&itemname=" . $name . "'})"
									)
								);
							}
						}

						break;
					}
					case 'Placeholder' :
					case 'Tv' : {
						$default_field = array(
							'id',
							'type',
							'contentType',
							'pagetitle',
							'longtitle',
							'description',
							'alias',
							'link_attributes',
							'published',
							'pub_date',
							'unpub_date',
							'parent',
							'isfolder',
							'introtext',
							'content',
							'richtext',
							'template',
							'menuindex',
							'searchable',
							'cacheable',
							'createdon',
							'createdby',
							'editedon',
							'editedby',
							'deleted',
							'deletedon',
							'deletedby',
							'publishedon',
							'publishedby',
							'menutitle',
							'donthit',
							'haskeywords',
							'hasmetatags',
							'privateweb',
							'privatemgr',
							'content_dispo',
							'hidemenu',
							'alias_visible'
						);

						if(in_array($name, $default_field)) {
							return;
						}

						$sql = $modx->db->query('SELECT *
						FROM ' . $modx->getFullTableName('site_tmplvars') . '
						WHERE name="' . $name . '"
						LIMIT 1');

						if($modx->db->getRecordCount($sql)) {
							$row = $modx->db->getRow($sql);
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-list-alt"></i> ' . $row['name']
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-pencil-square-o"></i> ' . $_lang['edit'],
									'onclick' => "modx.openWindow({url: 'index.php?a=301&id=" . $row['id'] . "'})"
								)
							);
							if(!empty($row['description'])) {
								$contextmenu['seperator'] = '';
								$contextmenu['description'] = array(
									'innerHTML' => '<i class="fa fa-info"></i> ' . $row['description']
								);
							}
						} else {
							$contextmenu = array(
								'header' => array(
									'innerHTML' => '<i class="fa fa-list-alt"></i> ' . $name
								),
								'item' => array(
									'innerHTML' => '<i class="fa fa-plus"></i> ' . $_lang['new_tmplvars'],
									'onclick' => "modx.openWindow({url: 'index.php?a=300&itemname=" . $name . "'})"
								)
							);
						}

						break;
					}
				}
				echo json_encode($contextmenu, JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE);
				break;
			}
		}

		case 'movedocument' : {
			$id = !empty($_REQUEST['id']) ? (int) $_REQUEST['id'] : '';
			$parent = isset($_REQUEST['parent']) ? (int) $_REQUEST['parent'] : 0;
			$menuindex = isset($_REQUEST['menuindex']) ? $_REQUEST['menuindex'] : 0;

			// set parent
			if($id && $parent >= 0) {
				// находим старого родителя
				$parentOld = $modx->db->getValue($modx->db->select('parent', $modx->getFullTableName('site_content'), 'id=' . $id));

				// устанавливаем нового родителя
				$modx->db->update(array(
					'parent' => $parent
				), $modx->getFullTableName('site_content'), 'id=' . $id);
				// устанавливаем родителю isfolder = 1
				$modx->db->update(array(
					'isfolder' => 1
				), $modx->getFullTableName('site_content'), 'id=' . $parent);

				if($parent != $parentOld) {
					// проверяем остались ли дочерние ресурсы у родителя и меняем значение isfolder
					if($modx->db->getRecordCount($modx->db->select('id', $modx->getFullTableName('site_content'), 'parent=' . $parentOld))) {
						$modx->db->update(array(
							'isfolder' => 1
						), $modx->getFullTableName('site_content'), 'id=' . $parentOld);
					} else {
						$modx->db->update(array(
							'isfolder' => 0
						), $modx->getFullTableName('site_content'), 'id=' . $parentOld);
					}
				}
			}

			// set menuindex
			if(!empty($menuindex)) {
				$menuindex = explode(',', $menuindex);
				foreach($menuindex as $key => $value) {
					$modx->db->query('UPDATE ' . $modx->getFullTableName('site_content') . ' SET menuindex=' . $key . ' WHERE id =' . $value);
				}
			} else {
				// TODO: max(*) menuindex
			}

			break;
		}
	}
}