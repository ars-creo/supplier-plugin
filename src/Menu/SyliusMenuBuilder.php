<?php

/*
 * This file is part of the BabDevSyliusSupplierBundle package.
 *
 * (c) Michael Babker
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BabDev\SyliusSupplierBundle\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * @author Michael Babker <michael.babker@gmail.com>
 */
final class SyliusMenuBuilder
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function configureSupplierMenu(MenuBuilderEvent $event)
    {
        $adminMenu = $event->getMenu();

        $configurationMenu = $adminMenu->getChild('configuration');

        $configurationMenu
            ->addChild('routes', ['route' => 'babdev_sylius_supplier_admin_supplier_index'])
            ->setLabel('babdev_sylius_supplier.menu.admin.suppliers')
            ->setLabelAttribute('icon', 'shopping bag')
        ;
    }
}
