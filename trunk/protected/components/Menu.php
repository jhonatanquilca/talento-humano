<?php

class Menu {

    private static $_controller;

    public static function getMenu($controller) {
        self::$_controller = $controller;
        $items = array(
            array('label' => '<i class="aweso-home"></i> Home  ',
                'url' => Yii::app()->homeUrl,
                'access' => 'action_dashboard_index',
                'active_rules' => array('module' => 'principal', 'controller' => 'dashboard')
            ),
//            array('label' => '<i class="aweso-group"></i> Empleados ',
//                'url' => array('/personal/empleado/admin'),
//                'access' => 'action_empleado_admin',
//                'active_rules' => array('module' => 'personal', 'controller' => 'cltCliente', 'action' => 'admin')
//            ),
//            array('label' => '<i class="aweso-file"></i> Informes ',
//                'url' => array('/notificacion/informe/admin/'),
//                'access' => 'action_informe_admin',
//                'active_rules' => array('module' => 'notificacion', 'controller' => 'informe', 'action' => 'admin')
//            ),
//            array('label' => '<i class="aweso-tasks"></i> Tareas',
//                'url' => array('/tareas/tarea/admin/'),
//                'access' => 'action_tarea_admin',
//                'active_rules' => array('module' => 'tareas', 'controller' => 'tarea', 'action' => 'admin')
//            ),
        );

        return self::generateMenu($items);
    }

    public static function getAdminMenu($controller) {
        self::$_controller = $controller;
        $items = array(
            array('label' => '<i class="aweso-home"></i> home', 'url' => Yii::app()->homeUrl),
            array('label' => '<i class="aweso-user"></i>  Usuarios', 'url' => Yii::app()->user->ui->userManagementAdminUrl, 'access' => 'Cruge.ui.*', 'active_rules' => array('module' => 'cruge')),
//            array('label' => '<i class="aweso-map-marker"></i> Ubicaciones', 'url' => '#',
//                'itemOptions' => array('class' => 'dropdown-list'),
//                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
//                'items' => array(
//                    array('label' => 'Paìs', 'url' => array('/personal/pais/admin/'), 'access' => 'action_pais_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'pais')),
//                    array('label' => 'Regiòn', 'url' => array('/personal/region/admin/'), 'access' => 'action_region_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'region')),
//                    array('label' => 'Provincia', 'url' => array('/personal/provincia/admin/'), 'access' => 'action_provincia_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'provincia')),
//                    array('label' => 'Ciudad', 'url' => array('/personal/ciudad/admin/'), 'access' => 'action_ciudad_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'ciudad')),
//                    array('label' => 'Sector', 'url' => array('/personal/sector/admin/'), 'access' => 'action_sector_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'sector')),
//                )),
//            array('label' => '<i class="aweso-briefcase"></i> Empleo', 'url' => '#',
//                'itemOptions' => array('class' => 'dropdown-list'),
//                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
//                'items' => array(
//                    array('label' => 'Departamentos', 'url' => array('/personal/empleoDepartamento/admin/'), 'access' => 'action_empleoDepartamento_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'empleoDepartamento')),
//                    array('label' => 'Cargos', 'url' => array('/personal/empleoCargo/admin/'), 'access' => 'action_empleoCargo_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'empleoCargo')),
//                    array('label' => 'Estados', 'url' => array('/personal/estadoEmpleo/admin/'), 'access' => 'action_estadoEmpleo_admin', 'active_rules' => array('module' => 'personal', 'controller' => 'estadoEmpleo')),
//                )),
//            array('label' => '<i class="aweso-tasks"></i> Tareas', 'url' => '#',
//                'itemOptions' => array('class' => 'dropdown-list'),
//                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
//                'items' => array(
//                    array('label' => 'Etapas', 'url' => array('/tareas/tareaEtapa/admin/'), 'access' => 'action_tareaEtapa_admin', 'active_rules' => array('module' => 'tareas', 'controller' => 'tareaEtapa')),
//                    array('label' => 'Objetivos', 'url' => array('/tareas/tareaObjetivo/admin/'), 'access' => 'action_tareaObjetivo_admin', 'active_rules' => array('module' => 'tareas', 'controller' => 'tareaObjetivo')),
//                )),
//            array('label' => '<i class="aweso-file"></i> Informes', 'url' => '#',
//                'itemOptions' => array('class' => 'dropdown-list'),
//                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown-list',),
//                'items' => array(
//                    array('label' => 'Prioridad', 'url' => array('/notificacion/prioridadInforme/admin/'), 'access' => 'action_prioridadInforme_admin', 'active_rules' => array('module' => 'notificacion', 'controller' => 'prioridadInforme')),
//                    array('label' => 'Tipos', 'url' => array('/notificacion/tipoInforme/admin/'), 'access' => 'action_tipoInforme_admin', 'active_rules' => array('module' => 'notificacion', 'controller' => 'tipoInforme')),
//                )),
        );

        return self::generateMenu($items);
    }

    /**
     * Function to create a menu with acces rules and active item
     * @param array $items items to build the men
     * @return array the formated menuu
     */
    private static function generateMenu($items) {
        $menu = array();

        foreach ($items as $k => $item) {
            $access = false;
            $menu_item = $item;

            // Check children access
            if (isset($item['items'])) {
                $menu_item['items'] = array();
                // Check childrens access
                foreach ($item['items'] as $j => $children) {
                    if ($access = Yii::app()->user->checkAccess($children['access'])) {
                        $menu_item['items'][$j] = $children;
                        if (isset($children['active_rules']) && self::getActive2($children['active_rules'])) {
                            $menu_item['items'][$j]['active'] = true;
                            $menu_item['active'] = true;
                        }
                    }
                }
            } else {
                // Check item access
                if (isset($item['access'])) {
                    $access = Yii::app()->user->checkAccess($item['access']);
                } else {
                    $access = true;
                }
                // Check active
                if (isset($item['active_rules'])) {
                    $menu_item['active'] = self::getActive2($item['active_rules']);
                }
            }

            // If acces to the item or any child add to the menu
            if ($access) {
                $menu[] = $menu_item;
            }
        }

        return $menu;
    }

    private static function getActive2($active_rules) {
        $current = false;
        //MODULE
        $module = false;
        //CONTROLLER
        $controller = FALSE;
        //ACTION
        $action = false;
        if (self::$_controller) {
            if (is_array(current($active_rules))) {
                foreach ($active_rules as $rule) {
                    $operator = isset($rule['operator']) ? $rule['operator'] : '==';
                    if (isset($rule['module'])) {
                        if (self::$_controller->module) {
                            $module = self::BooleanOperator($operator, self::$_controller->module->id, $rule['module']);
                        }
                    } else {
                        $module = true;
                    }
                    if (isset($rule['controller'])) {
                        $controller = self::BooleanOperator($operator, self::$_controller->id, $rule['controller']);
                    } else {
                        $controller = true;
                    }
                    if (isset($rule['action'])) {
                        $action = self::BooleanOperator($operator, self::$_controller->action->id, $rule['action']);
                    } else {
                        $action = true;
                    }
                    if (!isset($rule['controller']) && !isset($rule['module']) && !isset($rule['action']))
                        $current = false;
                    else
                        $current = $module && $controller && $action;
                    if (!$current)
                        break;
                }
            } else {
                $operator = isset($active_rules['operator']) ? $active_rules['operator'] : '==';
                if (isset($active_rules['module'])) {
                    if (self::$_controller->module) {
                        $module = self::BooleanOperator($operator, self::$_controller->module->id, $active_rules['module']);
                    }
                } else {
                    $module = true;
                }
                if (isset($active_rules['controller'])) {
                    $controller = self::BooleanOperator($operator, self::$_controller->id, $active_rules['controller']);
                } else {
                    $controller = true;
                }
                if (isset($active_rules['action'])) {
                    $action = self::BooleanOperator($operator, self::$_controller->action->id, $active_rules['action']);
                } else {
                    $action = true;
                }
                if (!isset($active_rules['controller']) && !isset($active_rules['module']) && !isset($active_rules['action']))
                    $current = false;
                else
                    $current = $module && $controller && $action;
//                var_dump($current);
            }
        }
        return $current;
    }

    private static function BooleanOperator($operator, $compare1, $compare2) {
        $result = FALSE;
        if ($operator == "==")
            $result = $compare1 == $compare2;
        if ($operator == "!=")
            $result = $compare1 != $compare2;

        return $result;
    }

}
