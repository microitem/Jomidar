<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Menu;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        $menu = array(
          array('id' => '1','name' => 'Main Menu','position' => 'Header','data' => '[{"text":"Home","icon":"","href":"/","target":"_self","title":""},{"text":"Property","icon":"empty","href":"#","target":"_self","title":"","children":[{"text":"Property List","icon":"empty","href":"/list","target":"_self","title":""},{"text":"Property Map","icon":"empty","href":"/map","target":"_self","title":""},{"text":"Property Details","icon":"empty","href":"/list","target":"_self","title":""}]},{"text":"Project","icon":"empty","href":"#","target":"_self","title":"","children":[{"text":"Projects","icon":"empty","href":"/project","target":"_self","title":""},{"text":"Project detail","icon":"empty","href":"/project","target":"_self","title":""}]},{"text":"Agent","icon":"empty","href":"#","target":"_self","title":"","children":[{"text":"Agents","icon":"empty","href":"/agent/list","target":"_self","title":""},{"text":"Agent Details","icon":"empty","href":"/agent/list","target":"_self","title":""}]},{"text":"Agency","icon":"empty","href":"#","target":"_self","title":"","children":[{"text":"Agencies","icon":"empty","href":"/agency/list","target":"_self","title":""},{"text":"Agency Detail","icon":"empty","href":"/agency/list","target":"_self","title":""}]},{"text":"Blog","icon":"empty","href":"#","target":"_self","title":"","children":[{"text":"Blogs","icon":"empty","href":"/blogs","target":"_self","title":""},{"text":"Blog Details","icon":"empty","href":"/blogs","target":"_self","title":""}]},{"text":"Contact","icon":"empty","href":"/contact","target":"_self","title":""}]','lang' => 'en','status' => '1','created_at' => '2021-01-18 20:39:58','updated_at' => '2021-01-19 12:30:20'),
          array('id' => '5','name' => 'Main Menu','position' => 'Header','data' => '[{"text":"الصفحة الرئيسية","href":"/","icon":"empty","target":"_self","title":""},{"text":"خاصية","href":"#","icon":"empty","target":"_self","title":"","children":[{"text":"قائمة الممتلكات","href":"/list","icon":"empty","target":"_self","title":""},{"text":"خريطة الملكية","href":"/map","icon":"empty","target":"_self","title":""},{"text":"تفاصيل اوضح","href":"/list","icon":"empty","target":"_self","title":""}]},{"text":"مشروع","href":"#","icon":"empty","target":"_self","title":"","children":[{"text":"المشاريع","href":"/project","icon":"empty","target":"_self","title":""},{"text":"تفاصيل المشروع","href":"/project","icon":"empty","target":"_self","title":""}]},{"text":"وكيل","href":"#","icon":"empty","target":"_self","title":"","children":[{"text":"عملاء","href":"/agent/list","icon":"empty","target":"_self","title":""},{"text":"تفاصيل الوكيل","href":"/agent/list","icon":"empty","target":"_self","title":""}]},{"text":"وكالة","href":"#","icon":"empty","target":"_self","title":"","children":[{"text":"وكالات","href":"/agency/list","icon":"empty","target":"_self","title":""},{"text":"تفاصيل الوكالة","href":"/agency/list","icon":"empty","target":"_self","title":""}]},{"text":"مدونة","href":"#","icon":"empty","target":"_self","title":"","children":[{"text":"المدونات","href":"/blogs","icon":"empty","target":"_self","title":""},{"text":"تفاصيل المدونة","href":"/blogs","icon":"empty","target":"_self","title":""}]},{"text":"اتصل","href":"/contact","icon":"empty","target":"_self","title":""}]','lang' => 'ar','status' => '1','created_at' => '2021-01-18 20:39:58','updated_at' => '2021-01-19 12:50:26'),
          array('id' => '6','name' => 'Explore','position' => 'Footer_left','data' => '[{"text":"About Us","icon":"","href":"/page/about-us","target":"_self","title":""},{"text":"My Account","icon":"empty","href":"/agent/dashboard","target":"_self","title":""},{"text":"My Listings","icon":"empty","href":"/agent/property","target":"_self","title":""},{"text":"Pricing Packages","icon":"empty","href":"/agent/package","target":"_self","title":""},{"text":"User Dashboard","icon":"empty","href":"/agent/dashboard","target":"_self","title":""},{"text":"Bookmarks","icon":"empty","href":"/agent/favourites","target":"_self","title":""}]','lang' => 'en','status' => '1','created_at' => '2021-01-20 19:59:56','updated_at' => '2021-01-20 20:06:22'),
          array('id' => '7','name' => 'About','position' => 'Footer_right','data' => '[{"text":"Sitemap","href":"/sitemap.xml","icon":"empty","target":"_self","title":""},{"text":"Contact Us","href":"/contact","icon":"empty","target":"_self","title":""},{"text":"Terms And Condition","href":"/page/terms-and-condition","icon":"empty","target":"_self","title":""},{"text":"Privacy Policy","href":"/page/privacy-policy","icon":"empty","target":"_self","title":""},{"text":"Latest News","href":"/blog","icon":"empty","target":"_self","title":""},{"text":"Support","href":"/contact","icon":"empty","target":"_self","title":""}]','lang' => 'en','status' => '1','created_at' => '2021-01-20 20:23:41','updated_at' => '2021-01-20 22:53:06'),
          array('id' => '8','name' => 'حول','position' => 'Footer_right','data' => '[{"text":"خريطة الموقع","href":"/sitemap.xml","icon":"empty","target":"_self","title":""},{"text":"اتصل بنا","href":"/contact","icon":"empty","target":"_self","title":""},{"text":"أحكام وشروط","href":"/page/terms-and-condition","icon":"empty","target":"_self","title":""},{"text":"سياسة الخصوصية","href":"/page/privacy-policy","icon":"empty","target":"_self","title":""},{"text":"أحدث الأخبار","href":"/blog","icon":"empty","target":"_self","title":""},{"text":"الدعم","href":"/contact","icon":"empty","target":"_self","title":""}]','lang' => 'ar','status' => '1','created_at' => '2021-01-20 20:23:41','updated_at' => '2021-01-20 23:04:23'),
          array('id' => '9','name' => 'يكتشف','position' => 'Footer_left','data' => '[{"text":"معلومات عنا","href":"/page/about-us","icon":"empty","target":"_self","title":""},{"text":"حسابي","href":"/agent/dashboard","icon":"empty","target":"_self","title":""},{"text":"القوائم الخاصة بي","href":"/agent/property","icon":"empty","target":"_self","title":""},{"text":"حزم التسعير","href":"/agent/package","icon":"empty","target":"_self","title":""},{"text":"لوحة تحكم المستخدم","href":"/agent/dashboard","icon":"empty","target":"_self","title":""},{"text":"إشارات مرجعية","href":"/agent/favourites","icon":"empty","target":"_self","title":""}]','lang' => 'ar','status' => '1','created_at' => '2021-01-20 19:59:56','updated_at' => '2021-01-20 23:12:31')
      );

      Menu::insert($menu);  	
}	
}