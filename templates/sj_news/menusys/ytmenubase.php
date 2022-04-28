<?php
/**
 * Class YtMenuBase
 * 
 * @author The YouTech JSC
 * @package menusys
 * @filesource ytmenubase.php
 * @license Copyright (c) 2011 The YouTech JSC. All Rights Reserved.
 * @tutorial http://www.smartaddons.com
 */

if (!class_exists('YtMenuBase')){
	class YtMenuBase extends YtObject{
		private $params;
		protected $menu;
		public function __construct($params){
			$this->params = $this->_createMenuParams();
			$this->params->bind($params);
		}

		/**
		 * Get menu tree for joomla 1.5
		 * @return YtMenu object is root of menu tree.
		 */
		public function getMenu($params=null){
			if (!isset($this->menu) || (isset($params) && !empty($params))){
				if (isset($params) && !empty($params)){
					$this->params->bind($params);
				}

				// Initialize variables.
				$app		= JFactory::getApplication();
				$sitemenu	= $app->getMenu();

				// If no active menu, use default
				$active = ($sitemenu->getActive()) ? $sitemenu->getActive() : $sitemenu->getDefault();
				$path		= $active->tree;
				$start		= (int) $this->params->get('startlevel', 0);
				$end		= (int) $this->params->get('endlevel',   -1);
				$deep		= $end - $start + 1;

				$items 		= $sitemenu->getItems('menutype', $this->params->get('menutype', 'mainmenu'));

				$root = new YtMenu(null, $this->params);

				$k = array();

				if (isset($items) && count($items)>0){

					$itemids = array();
					$itemobj = array();
					$smallest_level = 99999;

					foreach($items as $i => $item){
						$iid = $item->id;
						$itemids[$iid] = 1;
						$itemobj[$iid] =& $items[$i];
						if (!isset($item->sublevel)){
							if ($smallest_level > $item->level){
								$smallest_level = $item->level;
							}
						} else if ($smallest_level > $item->sublevel){
							$smallest_level = $item->sublevel;
						}
						//echo "<br>item $iid has tree: (" . implode(",", $item->tree) . ")";
					}

					//echo "<br><h1>$smallest_level</h1>";
					foreach($items as $i => $item){
						// level filter
						$s_parent_item = false;
						$spid  = $item->tree[0];
						$iid   = $item->id;
						$ideep = count($item->tree);

						if (!isset($item->sublevel)){
							if ($start>$item->level) continue;
						} else if ($start>$item->sublevel) continue;
						// if $deep<=0 ignore endlevel check.
						if (!isset($item->sublevel)){
							if ($deep>0 && $end <$item->level) continue;
						} else if ($deep>0 && $end <$item->sublevel) continue;
						// if is not child of start level items.
						if (!isset($item->sublevel)){
							if ($deep>1 && $itemobj[$spid]->level>$smallest_level) continue;
						} else if ($deep>1 && $itemobj[$spid]->sublevel>$smallest_level) continue;
						//echo "<br> New menu item: " . $iid;

                        $igP = (array)$this->params;
                        $igP['show_title'] =  $item->getParams()['show_title'];
                        $igP['link_titles'] =  $item->getParams()['link_titles'];
                        $igP['show_intro'] =  $item->getParams()['show_intro'];
                        $igP['info_block_position'] =  $item->getParams()['info_block_position'];
						$igP['info_block_show_title'] =  $item->getParams()['info_block_show_title'];
						$igP['show_category'] =  $item->getParams()['show_category'];
						$igP['link_category'] =  $item->getParams()['link_category'];                        
                        $igP['show_parent_category'] =  $item->getParams()['show_parent_category'];
                        $igP['link_parent_category'] =  $item->getParams()['link_parent_category'];
                        $igP['show_associations'] =  $item->getParams()['show_associations'];
                        $igP['show_author'] =  $item->getParams()['show_author'];
                        $igP['link_author'] =  $item->getParams()['link_author'];
                        $igP['show_create_date'] =  $item->getParams()['show_create_date'];
                        $igP['show_modify_date'] =  $item->getParams()['show_modify_date'];
                        $igP['show_publish_date'] =  $item->getParams()['show_publish_date'];
                        $igP['show_item_navigation'] =  $item->getParams()['show_item_navigation'];
                        $igP['show_vote'] =  $item->getParams()['show_vote'];
                        $igP['show_hits'] =  $item->getParams()['show_hits'];
                        $igP['show_tags'] =  $item->getParams()['show_tags'];
                        $igP['show_noauth'] =  $item->getParams()['show_noauth'];
                        $igP['urls_position'] =  $item->getParams()['urls_position'];
                        $igP['menu-anchor_title'] =  $item->getParams()['menu-anchor_title'];
                        $igP['menu-anchor_css'] =  $item->getParams()['menu-anchor_css'];
                        $igP['menu_image'] =  $item->getParams()['menu_image'];
                        $igP['menu_image_css'] =  $item->getParams()['menu_image_css'];
                        $igP['menu_text'] =  $item->getParams()['menu_text'];
                        $igP['menu_show'] =  $item->getParams()['menu_show'];
                        $igP['page_title'] =  $item->getParams()['page_title'];
                        $igP['show_page_heading'] =  $item->getParams()['show_page_heading'];
                        $igP['page_heading'] =  $item->getParams()['page_heading'];
                        $igP['pageclass_sfx'] =  $item->getParams()['pageclass_sfx'];
                        $igP['menu-meta_description'] =  $item->getParams()['menu-meta_description'];
                        $igP['robots'] =  $item->getParams()['robots'];
                        $igP['ytmenu_class'] =  $item->getParams()['ytmenu_class'];
                        $igP['ytext_desc'] =  $item->getParams()['ytext_desc'];
                        $igP['ytext_cols'] =  $item->getParams()['ytext_cols'];
                        $igP['ytext_width'] =  $item->getParams()['ytext_width'];
                        $igP['ytext_colwidth'] =  $item->getParams()['ytext_colwidth'];
                        $igP['ytext_cssid'] =  $item->getParams()['ytext_cssid'];
                        $igP['ytext_contenttype'] =  $item->getParams()['ytext_contenttype'];
                        $igP['ytext_modules'] =  $item->getParams()['ytext_modules'];
                        $igP['ytext_positions'] =  $item->getParams()['ytext_positions'];



						$k[$iid] = new YtMenu($item, $igP);
						
					};

					// set active items
					foreach ($path as $id){
						if (isset($k[$id])){
							$k[$id]->set('active', 1);
						}
					}

					foreach($k as $key => $item){
						// if type is alias (value is 'menulink' in Joomla 1.5)
						//echo "<br>id is  $key";
						if ($item->type=='menulink'){
							$refid = $item->query['Itemid'];
							$aliasitem = $sitemenu->getItem($refid);
							if ($aliasitem){
								$item->set('_aliasitem', new YtMenu($aliasitem, $this->params));
							} else {
								$item->set('_aliasitem', false);
							}
							//$item->debug();die();
						}

						// id of item's parent
						$ipid = $item->get('parent');
						$ideep = count($item->tree);

						if (!isset($k[$ipid])) {
							$root->addChild($item);
							continue;
						}
						//echo "<br>parent is  $ipid";
						$parentNode =& $k[$ipid];
						$parentNode->addChild($item);
					}
				}
				//$this->dumproot($root);
				//die("<br>[DONE]");
				unset($itemids);
				unset($itemobj);
				$this->menu = $root;
			}
			return $this->menu;
		}

		function dumproot($root){
			$a2d = array();
			if ($root->isRoot()){
				echo "\nROOT";
				if($root->haveChild()){
					foreach ($root->getChild() as $child){
						$this->dumproot($child);
					}
				}
			} else {
				$l = $root->level;
				echo "\n";
				for ($i=0; $i<$l; $i++){
					echo "\t";
				}
				echo $root->id;
				if($root->haveChild()){
					foreach ($root->getChild() as $child){
						$this->dumproot($child);
					}
				}
			}
		}

		/**
		 * create new default params.
		 * @return YtParams is default.
		 */
		private function _createMenuParams(){
			return new YtParams(
				array(
					'menutype'		=> 'mainmenu',
					'menustyle'		=> 'basic',
					'startlevel'	=> 0,
					'endlevel'		=> -1,
					'direction'		=> 'ltr',
					'basepath'		=> dirname(__FILE__),
					'cssidsuffix'	=> ''
				)
			);
		}
	}}