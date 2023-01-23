<?php

namespace Queents\TomatoSubscription\Menus;

use Queents\TomatoPHP\Services\Menu\Menu;
use Queents\TomatoPHP\Services\Menu\TomatoMenu;

class PlanMenu extends TomatoMenu
{
    /**
     * @var ?string
     * @example ACL
     */
    public ?string $group = "Plan";

    /**
     * @var ?string
     * @example dashboard
     */
    public ?string $menu = "dashboard";

    /**
     * @return array
     */
    public static function handler(): array
    {
        return [
            Menu::make()
                ->label("Plans")
                ->icon("bx bxs-bookmark")
                ->route("admin.plans.index"),
//            Menu::make()
//                ->label("Plan features")
//                ->icon("bx bxs-circle")
//                ->route("admin.plan-features.index"),
//            Menu::make()
//                ->label("Plan subscription")
//                ->icon("bx bxs-circle")
//                ->route("admin.plan-subscription.index"),
        ];
    }
}
