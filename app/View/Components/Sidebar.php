<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $is_allocation = false;

    public function __construct()
    {
        //
    }

    public function render()
    {
        

        return view('components.sidebar', [
            'navs' => $this->navs(),

            'is_allocation' => $this->is_allocation
        ]);
    }

    public function convert($data)
    {
        $current = request()->getRequestUri();
        // 

        // sidebar--collapsed

        // dd($current);
        foreach ($data as $key => $nav) {
            $isActive = false;

            if( !empty($nav['items']) ){

                foreach ($nav['items'] as $i => $item) {
                    
                    if (isset($item['group'])){

                        foreach($item['group']['items'] as $n => $sub){
                            if( $current == $sub['path']){
                                $data[$key]['items'][$i]['group']['items'][$n]['isActive'] = true;
                                $isActive = true;
                                // $currentPath = $sub['path'];
                                // break;
                            }
                        }
                    }
                    elseif(isset($item['hr'])){

                    }
                    elseif( $current == $item['path']){
                        $data[$key]['items'][$i]['isActive'] = true;
                        $isActive = true;
                    }
                }

                if(request()->is( trim($nav['path'],'/'), trim($nav['path'],'/').'/*' ) && $isActive){
                    $data[$key]['isExactActive'] = true;

                    $this->is_allocation = true;
                }
            }

            else if( request()->getRequestUri() == $nav['path']){
                $data[$key]['isActive'] = true;
                $data[$key]['isExactActive'] = true;
            }

            // dd($data[$key]);
            // request()->is( trim($nav->path,'/'), trim($nav->path,'/').'/*' )? ' active':''
        }

        // dd(json_decode( json_encode( $data )));
        // dd($data);
        
        return json_decode( json_encode( $data ));
    }

    public function navs()
    {
        $home = ['id'=>'home', 'path'=> '/', 'name'=> 'แดชบอร์ด', 'icon'=> '<svg width="24" height="24" viewBox="0 0 24 24"><path d="M9 5v6H5V5h4m10 8v6h-4v-6h4m2-10h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>'];

        $items = [];

        $items[] = ['path'=>'/store','name'=>'ข้อมูลโดยรวม'];
        $items[] = ['path'=>'','name'=>'รายการสั่งซื้อ'];
        $items[] = ['path'=>'','name'=>'การชำระเงิน'];
        $items[] = ['path'=>'','name'=>'การจัดส่ง'];
        

        $items[] = ['group'=>[
            'title' => 'สินค้า',
            'items' => [
                ['path'=>'','name'=>'รายการสินค้า'],
                ['path'=>'','name'=>'หมวดหมู่'],
                ['path'=>'','name'=>'สต็อกสินค้า'],
            ]
        ]];

        // $items[] = ['path'=>'','name'=>'การจัดส่ง'];

        // $items[] = ['header'=>'สินค้า'];
        // $items[] = ['path'=>'','name'=>'รายการสินค้า'];
        // $items[] = ['path'=>'','name'=>'หมวดหมู่'];
        // $items[] = ['path'=>'','name'=>'สต็อกสินค้า'];
        
        // $items[] = ['header'=>'ช่องทางการขาย'];
        // $items[] = ['path'=>'','name'=>'เว็บไซต์'];
        // $items[] = ['path'=>'','name'=>'Shopee'];
        // $items[] = ['path'=>'','name'=>'Lazada'];
        // $items[] = ['path'=>'','name'=>'Facebook Store'];
        
        // $items[] = ['header'=>'การตลาด'];
        // $items[] = ['path'=>'','name'=>'Email Marketing'];
        // // $items[] = ['path'=>'','name'=>'โฆษณาบน Facebook'];
        // // $items[] = ['path'=>'','name'=>'Line Broadcast'];
        // $items[] = ['path'=>'','name'=>'คูปองส่วนลด'];

        $items[] = ['hr'=>true];
        $items[] = ['path'=>'','name'=>'ตั้งค่าร้านค้า'];

        $store = ['id'=>'store', 'path'=> '/store', 'name'=> 'ร้านค้า', 'items' => $items, 'icon' => '<svg  width="24" height="24" viewBox="0 0 24 24"><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg>'];


        $items = [];

        $items[] = ['path'=>'/store','name'=>'ข้อมูลโดยรวม'];
        $items[] = ['path'=>'','name'=>'รายการสั่งซื้อ'];
        $items[] = ['path'=>'','name'=>'การชำระเงิน'];
        $items[] = ['path'=>'','name'=>'การจัดส่ง'];

        $blog = ['id'=>'blog', 'path'=> '/blogs', 'name'=> 'บล็อก', 'icon'=> '<svg width="24" height="24" viewBox="0 0 24 24"><path d="M3 3v18h18V3H3zm3 3h12v6H6V6zm12 12H6v-1h12v1zm0-2H6v-1h12v1z"></path></svg>', 'items' => $items];

        return $this->convert([
            $home,
            $store,
            $blog,
        ]);
    }
}
