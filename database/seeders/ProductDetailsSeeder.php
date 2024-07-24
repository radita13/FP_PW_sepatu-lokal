<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            $productDetail = ProductDetails::where('product_id', $product->id)->first();

            if ($productDetail) {
                // Update existing details if they exist
                $productDetail->update([
                    'specification' => $this->getSpecification($product->slug),
                    'description' => $this->getDescription($product->slug),
                    'image_1_header' => $this->getImageHeader1($product->slug),
                    'image_2_header' => $this->getImageHeader2($product->slug),
                    'image_3_header' => $this->getImageHeader3($product->slug),
                    'image_1' => $this->getImage1($product->slug),
                    'image_2' => $this->getImage2($product->slug),
                    'image_3' => $this->getImage3($product->slug),
                ]);
            } else {
                // Create new details if they do not exist
                ProductDetails::create([
                    'product_id' => $product->id,
                    'specification' => $this->getSpecification($product->slug),
                    'description' => $this->getDescription($product->slug),
                    'image_1_header' => $this->getImageHeader1($product->slug),
                    'image_2_header' => $this->getImageHeader2($product->slug),
                    'image_3_header' => $this->getImageHeader3($product->slug),
                    'image_1' => $this->getImage1($product->slug),
                    'image_2' => $this->getImage2($product->slug),
                    'image_3' => $this->getImage3($product->slug),
                ]);
            }
        }
    }

    // Helper methods to retrieve data based on product slug
    private function getSpecification($slug)
    {
        switch ($slug) {
                //Man Johnson spesifikasi
            case 'johnson-pluto-lowcut-lc-black-white': //1 Johnson
                return 'Bahan kanvas, Pengikat tali, Sintesis, Comfort foam, Sole Rubber Gum, -';
            case 'johnson-galaxy-pro-lowcut-lc-green': //2 Johnson
                return 'Bahan Kanvas, Pengikat tali, Sintesis, Comfort foam, Sole Rubber Gum, -';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'Bahan Kanvas, Pengikat tali, TPR Premium, Comfort foam, Sole Rubber Gum, -';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'Bahan Kanvas, Pengikat tali, Premium rubber, Comfort foam, Sole Rubber Gum, -';

                //Man Athletica spesifikasi
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'Bahan Tropis Mesh, Max Cage, Outsole Pylon Air, 160gr, -, -';

                //Man Aerostreet spesifikasi
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'Bahan Kanvas, Pengikat tali, Mesh, Kulit sintetis, -, -';

                //Man Compass spesifikasi
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'Upper Kanvas, Lining Kanvas, Tali Sepatu Polyester, Outsole Karet, -, -';

                // Women Johnson spesifikasi
            case 'johnson-salvia-white': //1 Johnson
                return 'Kulit sintesis, Pengikat tali, Tipe ujung sepatu bulat, Acara kasual, -, -';

                // Women Athletica spesifikasi
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'Bahan Synthetic Leather, Pengikat tali, Thermo rubber, Ventila Mesh, -, -';

                // Women Aerostreet spesifikasi
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'Bahan Kanvas, Pengikat tali, Mesh, Kulit sintetis, -, -';

                // Women Compass spesifikasi
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'Bahan Kanvas, Pengikat tali, Karet, Polyester, -, -';

            default:
                return '-, -, -, -, -, -,';
        }
    }

    private function getDescription($slug)
    {
        switch ($slug) {
                //Man Johnson deskripsi
            case 'johnson-pluto-lowcut-lc-black-white': //1 Johnson
                return 'SEPATU SNEAKERS JOHNSON - PLUTO LOWCUT (LC) BLACK WHITE dibuat dengan material berkualitas tinggi yang menggabungkan kanvas dan vegan leather pada bagian atasnya. Sepatu ini dilengkapi dengan insole Johnson Comfort Foam untuk kenyamanan ekstra, serta outsole berbahan Rubber Gum yang kokoh. Desainnya yang elegan dengan kombinasi warna hitam putih membuatnya cocok untuk berbagai aktivitas, mulai dari jalan-jalan santai hingga latihan fisik yang intens. Sepatu ini tidak hanya memberikan perlindungan yang baik namun juga menonjolkan gaya yang stylish dan serbaguna.';
            case 'johnson-galaxy-pro-lowcut-lc-green': //2 Johnson
                return 'Johnson - Galaxy Pro Lowcut (LC) | Green dirancang untuk gaya kasual yang dinamis. Dengan bahan Upper kanvas dan lapisan dalam yang sama, sepatu ini menawarkan kekokohan ekstra dan kenyamanan yang optimal. Sole Rubber Gum memberikan perlindungan tahan lama dan anti slip, sementara insole Foam + Eva menambahkan kenyalitas yang nyaman. Diproduksi dengan teknologi Vulcanized untuk kekuatan ekstra, cocok untuk penggunaan sehari-hari yang intens.';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'Shoes Johnson - Hydra White Black menggabungkan gaya dan kenyamanan dalam desain yang trendi. Dibuat dari Vegan Premium Leather dan Transparent Ripstop untuk kekuatan dan estetika. Lapisan dalam Busa Lapis Jersey, sole TPR Premium, serta insole Johnson Comfort Foam menawarkan kenyamanan maksimal. Ideal untuk penggunaan sehari-hari yang intens.';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'Johnson Basic Lowcut (LC) London adalah pilihan terbaik untuk gaya kasual Anda. Dibuat dengan bahan Kanvas Print yang kokoh, sepatu ini dilengkapi dengan insole Johnson Comfort Foam untuk kenyamanan maksimal. Sole Premium Rubber dan midsole Premium Rubber menawarkan perlindungan dan stabilitas yang handal. Sepatu ini dalam kondisi 100% BARU & ORI dan disertai packing dus dan kertas bungkus sepatu untuk memastikan kesempurnaan saat pengiriman.';

                //Man Athletica deskripsi
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'Athletica - Warner 1 Dark Grey adalah sepatu terbaru yang dirancang untuk performa optimal. Menggunakan outsole PylonAir yang ringan dan responsif, sepatu ini sangat cocok untuk berlari. Upper berbahan Tropis Mesh yang breathable menjaga kesejukan dan kenyamanan kaki, sementara teknologi MaxCage meningkatkan cengkeraman dan endurance saat berolahraga. Dengan berat hanya 160 gram, desainnya simpel dan modis, membuatmu percaya diri dalam berbagai kondisi.';

                //Man Aerostreet deskripsi
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'Aerostreet Massive Low Hitam Natural adalah pilihan yang tepat untuk mendukung berbagai aktivitas sehari-hari Anda. Sepatu ini dirancang menggunakan bahan tekstil dan kulit sintetis berkualitas tinggi yang tahan lama. Teknologi terbaru Shoes Injection Mould memastikan bahwa sol sepatu tidak akan jebol setelah dicuci atau kehujanan. Proses pembuatan dengan mencairkan bahan sole menggunakan tekanan tinggi membuatnya menyatu sempurna dengan bahan kain sepatu, tanpa menggunakan lem, sehingga memberikan daya rekat yang kuat antara bagian atas dan sol.';

                //Man Compass deskripsi
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'Sepatu Gazelle® Low adalah reinterpretasi klasik dengan sentuhan modern yang relevan, diperkenalkan kembali pada 2018. Siluet potongan rendah menonjolkan gaya santai dan kasual. Upper dan lining menggunakan bahan kanvas, sementara logo samping terbuat dari PVC, terinspirasi dari desain tahun 1988 yang menggambarkan Gazelle berlari. Lubang tali berwarna perak dan tali sepatu menggunakan polyester untuk tampilan dan kenyamanan yang optimal. Foxing dan outsole terbuat dari karet dengan proses vulkanisasi untuk daya tahan ekstra. Sepatu ini diproduksi di Indonesia dengan label woven sebagai sentuhan khusus.';

                // Women Johnson deskripsi
            case 'johnson-salvia-white': //1 Johnson
                return 'Sepatu Slip On Wanita Johnson - Salvia White ini didesain untuk memberikan kenyamanan dan gaya pada setiap langkah Anda. Bagian atas sepatu terbuat dari bahan tekstil dan kulit sintetis berkualitas tinggi yang memastikan daya tahan serta tampilan elegan. Sepatu ini dilengkapi dengan sol sintetis Direct Injection, yang memberikan daya rekat sangat kuat antara bagian atas dan sol, menjadikannya pilihan sempurna untuk menunjang berbagai aktivitas sehari-hari Anda.';

                // Women Athletica deskripsi
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'Tampil keren dan tangguh di lapangan dengan Sepatu Badminton RBS Carera Blue White dari Athletica Official Shop, ideal untuk semua musim dan penggunaan unisex. Dirancang ringan dan ramping untuk mobilitas dan kelincahan maksimal, sepatu ini memiliki bagian atas atletis dengan bahan ringan seperti mesh atau kulit sintetis untuk sirkulasi udara optimal dan dukungan yang baik saat gerakan lateral dan perubahan arah. Diproduksi lokal di Indonesia, sepatu ini menjadi pilihan utama bagi pecinta badminton yang menginginkan kombinasi performa dan kenyamanan.';

                // Women Aerostreet deskripsi
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'Aerostreet Rose Natural Hitam ini dirancang untuk keawetan meski dicuci atau terkena hujan, berkat teknologi Shoes Injection Mould yang menyatukan bahan sole dengan kain sepatu menggunakan tekanan tinggi tanpa lem. Terbuat dari bahan kanvas, mesh, dan kulit sintetis, sepatu ini nyaman dan tahan lama untuk berbagai aktivitas sehari-hari.';

                // Women Compass deskripsi
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'Siluet pertama sepatu Compass® terlahir kembali pada tahun 2018. Gazelle® Low dirancang dengan sentuhan vintage klasik yang dipadukan dengan detail modern yang relevan. Potongan rendah menekankan gaya santai dan kasual. Logo sampingnya, yang diwariskan dari tahun 1988, terinspirasi dari binatang Gazelle yang sedang berlari. Sepatu ini menggabungkan kenyamanan dan gaya untuk menemani berbagai aktivitas sehari-hari Anda.';

            default:
                return 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nobis similique harum laboriosam. Illum eveniet hic excepturi distinctio vitae amet, reprehenderit, error deserunt sapiente illo voluptates dolor non voluptatum nesciunt similique accusamus odit sunt obcaecati vel esse? Sapiente molestias doloremque, eaque recusandae explicabo veritatis omnis sed esse neque fugiat aut!';
        }
    }

    private function getImageHeader1($slug)
    {
        switch ($slug) {
                //Man header 1 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': //1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson_header1.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': //2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson_header1.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson_header1.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson_header1.png';

                //Man header 1 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica_header1.png';

                //Man header 1 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet_header1.png';

                //Man header 1 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass_header1.png';

                //Women header 1 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson_header1.png';

                //Women header 1 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica_header1.png';

                // Women header 1 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet_header1.png';

                // Women header 1 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass_header1.png';

            default:
                return 'img/buymenu/Noimage_header.png';
        }
    }

    private function getImageHeader2($slug)
    {
        switch ($slug) {
                // Man header 2 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': // 1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson_header2.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': // 2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson_header2.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson_header2.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson_header2.png';

                //Man header 2 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica_header2.png';

                //Man header 2 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet_header2.png';

                //Man header 2 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass_header2.png';

                //Women header 2 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson_header2.png';

                //Women header 2 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica_header2.png';

                // Women header 2 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet_header2.png';

                // Women header 2 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass_header2.png';

            default:
                return 'img/buymenu/Noimage_header.png';
        }
    }

    private function getImageHeader3($slug)
    {
        switch ($slug) {
                // Man Header 3 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': // 1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson_header3.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': // 2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson_header3.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson_header3.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson_header3.png';

                //Man header 3 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica_header3.png';

                // Man header 3 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet_header3.png';

                //Man header 3 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass_header3.png';

                //Women header 3 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson_header3.png';

                //Women header 3 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica_header3.png';

                // Women header 3 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet_header3.png';

                // Women header 3 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass_header3.png';

            default:
                return 'img/buymenu/Noimage_header.png';
        }
    }

    private function getImage1($slug)
    {
        switch ($slug) {
                //Man image 1 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': // 1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson1.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': // 2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson1.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson1.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson1.png';

                //Man image 1 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica1.png';

                //Man image 1 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet1.png';

                // Man image 1 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass1.png';

                //Women image 1 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson1.png';

                //Women image 1 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica1.png';

                // Women image 1 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet1.png';

                // Women header 1 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass1.png';

            default:
                return 'img/buymenu/Noimage.png';
        }
    }

    private function getImage2($slug)
    {
        switch ($slug) {
                // Man image 2 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': // 1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson2.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': // 2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson2.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson2.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson2.png';

                // Man image 2 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica2.png';

                // Man image 2 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet2.png';

                // Man image 2 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass2.png';

                //Women image 2 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson2.png';

                //Women image 2 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica2.png';

                // Women image 2 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet2.png';

                // Women header 2 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass2.png';

            default:
                return 'img/buymenu/Noimage.png';
        }
    }

    private function getImage3($slug)
    {
        switch ($slug) {
                // Man image 3 Johnson
            case 'johnson-pluto-lowcut-lc-black-white': // 1 Johnson
                return 'img/buymenu/Johnson/man/1/Johnson3.png';
            case 'johnson-galaxy-pro-lowcut-lc-green': // 2 Johnson
                return 'img/buymenu/Johnson/man/2/Johnson3.png';
            case 'johnson-hydra-white-black': //3 Johnson
                return 'img/buymenu/Johnson/man/3/Johnson3.png';
            case 'johnson-basic-lowcut-lc-london': //4 Johnson
                return 'img/buymenu/Johnson/man/4/Johnson3.png';

                //Man image 3 Athletica
            case 'athletica-warner-1-dark-grey': //1 Athletica
                return 'img/buymenu/Athletica/man/1/Athletica3.png';

                //Man image 3 Aerostreet
            case 'aerostreet-massive-low-hitam-natural': //1 Aerostreet
                return 'img/buymenu/Aerostreet/man/1/Aerostreet3.png';

                //Man image 3 Compass
            case 'compass-gazelle-low-black-gum': //1 Compass
                return 'img/buymenu/Compass/man/1/Compass3.png';

                //Women image 3 Johnson
            case 'johnson-salvia-white': //1 Johnson
                return 'img/buymenu/Johnson/woman/1/Johnson3.png';

                //Women image 3 Athletica
            case 'athletica-rbs-rbs-carera-blue-white': //1 Athletica
                return 'img/buymenu/Athletica/women/1/Athletica3.png';

                // Women image 3 Aerostreet
            case 'aerostreet-rose-natural-hitam': //1 Aerostreet
                return 'img/buymenu/Aerostreet/women/1/Aerostreet3.png';

                // Women header 1 Compass
            case 'compass-gazelle-low-white-blue': //1 Compass
                return 'img/buymenu/Compass/women/1/Compass3.png';


            default:
                return 'img/buymenu/Noimage.png';
        }
    }
}
