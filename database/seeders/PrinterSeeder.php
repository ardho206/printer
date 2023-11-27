<?php

namespace Database\Seeders;

use App\Models\Printer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrinterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $printers = [
                [
                    "nama" => "Canon PRO-300 A3+",
                    "spesifikasi" => "The Canon imagePROGRAF PRO-300 – An A3+ printer that inherits the same DNA as the imagePROGRAF PRO series, offering superior print quality, productivity, and the same print workflows as its larger imagePROGRAF PRO models. With a smaller form factor than the PIXMA PRO-10S it replaces, it is a distinct step-up in quality. Thanks to both print technology and software gives users confidence in faithful reproduction of their original images. With exceptional monochrome printing, and vivid colour printing up to A3+, the Canon PRO-300 is ideal for advanced level photographers looking to submit their prints for competitions, galleries, exhibitions or sales.",
                    "harga" => "9.200.000",
                    "foto" => "canon-pro-300-4.jpg",
                ],
                [
                    "nama" => "Epson L1110",
                    "spesifikasi" => "Bagi yang mencari printer sederhana, hanya untuk mengeprint berbagai macam dokumen namun dengan kualitas yang tajam maka dapat mencoba printer yang satu ini. Printer ini memiliki bobot yang tidak terlalu besar, yakni hanya 2,7 kg jadi dapat dipindahkan dengan mudah. Memiliki konektifitas Hi speed USB 2.0 yang membuat printer ini dapat mencetak dokumen dengan cepat, namun dengan kualitas terbaik.",
                    "harga" => "1.900.000",
                    "foto" => "printer-1.jpg",
                ],
                [
                    "nama" => "Epson WF-100 Wi-Fi",
                    "spesifikasi" => "Memiliki ukuran yang sangat ringkas, dan tipis membuat printer ini dapat dibawa kemana-mana, dan dipindahkan dengan mudah. Bobot yang dimiliki hanya 1,6 kg saja dan tidak menggunakan arus listrik melainkan menggunakan baterai untuk pengoperasiannya. Printer ini sudah memiliki konektifitas Hi-Speed USB 2.0, Wifi, Wifi Direct dan sudah dilengkapi fitur LCD panel. Tidak berhenti sampai di situ, printer ini dapat disambungkan ke 4 device sekaligus.",
                    "harga" => "3.800.000",
                    "foto" => "WF100_550px-X-310px.jpg",
                ],
                [
                    "nama" => "Canon PIXMA PRO-200",
                    "spesifikasi" => "Canon’s new 8-ink dye-based system delivers an expanded colour gamut for vibrant, high-quality photographs. With Canon PIXMA PRO-200 you also get deeper black impression and improved reproduction in reds and blues. The grey and light grey inks help to achieve exceptional monochrome prints too and speed up the printing process.",
                    "harga" => "6.400.000",
                    "foto" => "pixma-pro-200-as-sk-w-rear-tray.jpg",
                ],
            ];

            foreach ($printers as $key => $value) {
                Printer::create($value);
            }
    }
}
