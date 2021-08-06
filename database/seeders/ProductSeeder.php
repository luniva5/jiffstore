<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
            'name'=>'The Alchemist',
            'originalprice'=>'650',
            'sellingprice'=>'250',
            'category'=>'books',
            'description'=>'One of the most selling novel by Paulo Coelho',
            'gallery'=>'https://i.pinimg.com/564x/08/06/66/080666f8867c1a01dc14decabe5417fc.jpg'
           ],
           [
            'name'=>'Light Brown Jogger Pants',
            'originalprice'=>'1250',
            'sellingprice'=>'800',
            'category'=>'clothes',
            'description'=>'This jogger pants is perfect for home and casual days.
            The features of this jogger are the following: pants, loose fabric.',
            'gallery'=>'https://cdn.commercehq.com/commercehq-store-cb353ebeb8defda9f0ef1ceea4c55c95_da39a3ee5e6b4b0d3255bfef95601890afd80709/jumbo_b5ec9aa6264044f9a6c56a9fe8926664_0003-khaki-jogger-pants-01.jpg'
           ],
           [
            'name'=>'Flannel Oversized Shirt ',
            'originalprice'=>'1050',
            'sellingprice'=>'800',
            'category'=>'clothes',
            'description'=>'A comfortable cotton shirt',
            'gallery'=>'https://i.pinimg.com/564x/39/34/4e/39344e13643a5f12fd803004c9d77bcd.jpg'
           ],
           [
            'name'=>'Arizona Mission to Mars Hoodie ',
            'originalprice'=>'1675',
            'sellingprice'=>'1200',
            'category'=>'clothes',
            'description'=>'The most comfortable, stylish and coolest aesthetic unisex hoodie',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0095/4715/3463/products/arizona-mission-to-mars-hoodie-cosmique-studio-7_180x.jpg?v=1602846050'
           ],
           [
            'name'=>'Flannel Oversized Shirt ',
            'originalprice'=>'1050',
            'sellingprice'=>'800',
            'category'=>'clothes',
            'description'=>'A comfortable cotton shirt',
            'gallery'=>'https://i.pinimg.com/564x/39/34/4e/39344e13643a5f12fd803004c9d77bcd.jpg'
           ],
           [
            'name'=>'Converse Chuck Taylor Hi Lift ',
            'originalprice'=>'2050',
            'sellingprice'=>'1675',
            'category'=>'shoes',
            'description'=>'Converse Chuck Taylor Hi Lift Platform black trainers',
            'gallery'=>'https://i.pinimg.com/564x/4d/59/74/4d5974655afd118f8c4475a1d7654448.jpg'
           ],
           [
            'name'=>'Thin Figaro Chain Necklace 16”',
            'originalprice'=>'1050',
            'sellingprice'=>'800',
            'category'=>'accesories',
            'description'=>'14k gold filled choker style thin Figaro Chain Lobster clasp closure Chain length: 16" Does not rust or tarnish',
            'gallery'=>'https://i.pinimg.com/564x/fd/f1/dc/fdf1dc673c9dd5fd921573ab1ffb941f.jpg'
           ],
           [
            'name'=>'Oversized Leather Bomber Jacket',
            'originalprice'=>'3550',
            'sellingprice'=>'2900',
            'category'=>'clothes',
            'description'=>'Vintage 90s Bella Hadid Style Oversized Leather Bomber Jacket',
            'gallery'=>'https://i.pinimg.com/564x/28/7b/43/287b4314719654885664bf867e7b0a88.jpg'
           ],
           [
            'name'=>'Chain Design Luxury Hand Bag',
            'originalprice'=>'2050',
            'sellingprice'=>'1600',
            'category'=>'accessories',
            'description'=>'his 2020 Chain Design Luxury Hand Bag Female Travel is a handbag that would look lovely when paired with your favorite pair of jeans and blouse. It comes in a baguette shape.',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0423/8472/0021/products/2020-chain-design-luxury-hand-bag-female-travel-women-accessories-style4-beige-20cm-max-length-30cm-forwomenusa-27843952345237.jpg?v=1628108835'
           ],
           [
            'name'=>' Black Biker Shorts',
            'originalprice'=>'1150',
            'sellingprice'=>'700',
            'category'=>'clothes',
            'description'=>'A comfortable black shorts',
            'gallery'=>'https://1.bp.blogspot.com/-04cdO6tCYSw/XzhFbGjKKAI/AAAAAAAA380/cjaJxHJRzgEFvEWHEJdc64BDlfSz6k_UwCLcBGAsYHQ/s705/d820c0772b60342bbee00e682110eb82.jpg'
           ],
           [
            'name'=>'Milk and Honey',
            'originalprice'=>'550',
            'sellingprice'=>'300',
            'category'=>'books',
            'description'=>'A book by Rupi Kaur',
            'gallery'=>'https://i.pinimg.com/564x/fd/4a/fe/fd4afe48a234960eff02ea5b2b9a7d2c.jpg'
           ],
           [
            'name'=>'Jordan 1 Retro High Obsidian UNC',
            'originalprice'=>'6550',
            'sellingprice'=>'4500',
            'category'=>'shoes',
            'description'=>'Jordan Brand adds a new colorway to its hot streak of Jordan 1 releases with the Air Jordan 1 -Obsidian / University Blue',
            'gallery'=>'https://i.pinimg.com/564x/9a/83/eb/9a83eb8e2d13b1034c2af08312d08d42.jpg'
           ],
           [
            'name'=>'Graphic Tee',
            'originalprice'=>'1550',
            'sellingprice'=>'1000',
            'category'=>'clothes',
            'description'=>'Neck Short Sleeve Fashion Tops Oversized Loose Streetwear',
            'gallery'=>'https://us03-imgcdn.ymcart.com/63559/2021/03/20/7/a/7aa467a6d6936792.png?x-oss-process=image/quality,Q_90/auto-orient,1/resize,m_lfit,w_650,h_975/format,webp'
           ],
        ]);
    }
}
