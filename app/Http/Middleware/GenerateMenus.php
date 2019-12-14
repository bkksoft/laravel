<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MainMenu', function ($menu) {

            $menu->add('รายชื่อติดต่อ', 'contacts')->icon('<i class="fa fa-home"></i>');
            $menu->add('About', 'about');
            $menu->add('Services', 'services');

            $menu->title();
            $menu->divide();

            $menu->add('Contact', 'contact');
        });
    
        return $next($request);
    }
}
