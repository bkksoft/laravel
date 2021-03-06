const Home = {
    id: "home",
    path: "/",
    name: "แดชบอร์ด",
    icon: `<svg width="24" height="24" viewBox="0 0 24 24"><path d="M9 5v6H5V5h4m10 8v6h-4v-6h4m2-10h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>`,

    items: [
        {
            path: "/dashboard-analytics",
            name: "Analytics"
        },
        {
            path: "/dashboard-crm",
            name: "CRM"
        },
        {
            path: "/",
            name: "Ecommerce"
        },
        {
            path: "/dashboard-projects",
            name: "Projects"
        }
    ]
};

const Store = {
    id: "store",
    path: "/store",
    name: "ร้านค้า",
    icon: `<svg  width="24" height="24" viewBox="0 0 24 24"><path d="M18.36 9l.6 3H5.04l.6-3h12.72M20 4H4v2h16V4zm0 3H4l-1 5v2h1v6h10v-6h4v6h2v-6h1v-2l-1-5zM6 18v-4h6v4H6z"></path></svg>`,

    items: [
        {
            path: "/store",
            name: "ข้อมูลโดยรวม"
        },
        {
            group: {
                name: "สินค้า",
                items: [
                    {
                        path: "/store/products",
                        name: "รายการสินค้า"
                    }
                ]
            }
        },
        {
            hr: true
        },

        {
            path: '/store/settings',
            name: 'ตั้งค่าร้านค้า'
        }
    ]
};

const Blog = {
    id: "blog",
    path: "/blogs",
    name: "บล็อก",
    icon: `<svg width="24" height="24" viewBox="0 0 24 24"><path d="M3 3v18h18V3H3zm3 3h12v6H6V6zm12 12H6v-1h12v1zm0-2H6v-1h12v1z"></path></svg>`
};

export const routes = [
    Home, Store, Blog
]
