<?php

namespace Database\Seeders;

use App\Models\ShortCourse;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ShortCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure the short-courses directory exists
        $storagePath = storage_path('app/public/short-courses');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        // Available images from img folder
        $availableImages = [
            'WhatsApp Image 2025-11-18 at 10.05.41 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.41 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.42 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.42 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.43 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.43 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM (2).jpeg',
        ];

        $courses = [
            [
                'title' => 'Welding',
                'img' => $this->copyImage($availableImages[0] ?? null),
                'description' => 'Ready to transform from aspiring welder to skilled professional? Our seasoned instructors, boasting years of real-world experience, will ignite your passion for welding and equip you with the confidence and competence to excel. We offer a diverse curriculum, catering to all skill levels. Whether you\'re a complete novice or a seasoned enthusiast looking to refine your expertise, we have the program to elevate your skills. Beginners will establish a strong foundation, mastering safety protocols, equipment operation, and fundamental techniques. Intermediate students will delve deeper, exploring advanced processes, diverse joint configurations, and specific material welding. Advanced-level learners will prepare for industry certification, pushing their boundaries with specialized welding techniques including 3G Welding, 4G Welding, TIG Welding, MIG Welding, and 6G Welding.',
            ],
            [
                'title' => 'Pipe Fitter',
                'img' => $this->copyImage($availableImages[1] ?? null),
                'description' => 'Build a Fulfilling Career with Hands-on Pipe Fitting Training. Do you have a knack for working with your hands and solving practical problems? Are you looking for a rewarding career path with excellent earning potential? Then pipe fitting might be the perfect fit for you! Confidence Training Institute offers comprehensive pipe fitting training programs designed to equip you with the skills, knowledge, and confidence you need to excel in this in-demand trade. Through our intensive practical training curriculum, you\'ll gain the ability to identify different types of pipes and fittings, master pipe cutting, threading, and bending techniques, learn various joining methods including brazing, soldering, and welding, install and maintain piping systems in various settings, and understand and adhere to safety protocols and regulations.',
            ],
            [
                'title' => 'Steel Fitter',
                'img' => $this->copyImage($availableImages[2] ?? null),
                'description' => 'Are you passionate about working with your hands and building something tangible? Is a career filled with challenge and diverse opportunities what you seek? Then consider steel fitting – a rewarding trade offering a stable path to success. Confidence Training Institute opens the door to a fulfilling career in steel fitting with our comprehensive practical training program. We equip you with the skills, knowledge, and confidence needed to thrive in this exciting field. Through hands-on learning, you\'ll master identifying and understanding different types of steel materials and profiles, utilizing various cutting techniques including oxy-fuel and plasma cutting, developing proficiency in layout, drilling, and fastening methods, learning advanced techniques like welding and brazing, interpreting blueprints and technical drawings for accurate fabrication, and following strict safety protocols and industry standards.',
            ],
            [
                'title' => 'Scaffolding',
                'img' => $this->copyImage($availableImages[3] ?? null),
                'description' => 'Do you have a head for heights and a desire to learn a specialized and crucial skill? Scaffolding might be the perfect career path for you! Confidence Training Institute offers a hands-on, comprehensive scaffolding training program designed to equip you with the knowledge and practical skills needed to excel in this in-demand and well-paying trade. Through our intensive practical training program, you will gain a thorough understanding of different types of scaffolding systems, master the safe and efficient assembly, dismantling, and inspection of scaffolds, learn proper use of tools and equipment essential for scaffolding work, develop the ability to identify and mitigate potential hazards in scaffolding workplaces, and understand and adhere to all safety regulations and standards set by OSHA and relevant authorities.',
            ],
            [
                'title' => 'Mechanical Fitter',
                'img' => $this->copyImage($availableImages[4] ?? null),
                'description' => 'Are you mechanically inclined with a passion for solving problems and creating solutions? If so, a career in mechanical fitting might be the perfect fit for you! Confidence Training Institute offers a comprehensive practical training program designed to equip you with the skills, knowledge, and confidence needed to excel in this diverse and rewarding field. Through our hands-on learning approach, you\'ll gain the ability to identify and understand various mechanical components and systems, master essential skills like disassembly, assembly, and installation of machinery, develop proficiency in using precision tools and measuring equipment, learn practical skills like pipe fitting, bearing replacement, and shaft alignment, troubleshoot mechanical issues and implement effective repairs, and adhere to safety protocols and industry standards for a safe work environment.',
            ],
            [
                'title' => 'Machinist',
                'img' => $this->copyImage($availableImages[5] ?? null),
                'description' => 'Do you have a passion for precision, a knack for creating with your hands, and a desire for a rewarding and stable career? Then, becoming a machinist might be the perfect path for you! Confidence Training Institute offers a comprehensive and hands-on machinist practical training program designed to equip you with the skills, knowledge, and confidence needed to thrive in this in-demand and exciting field. Through our intensive practical training program, you\'ll gain the ability to understand and operate various machining equipment including lathes, mills, CNC machines, and grinders, master essential machining techniques such as drilling, turning, milling, sawing, and grinding, develop the ability to read and interpret blueprints and technical drawings, learn proper use of precision tools and measuring instruments for accurate work, understand and apply machining theory and principles for a strong foundation in the trade, and maintain a safe work environment by adhering to strict safety protocols and industry standards.',
            ],
            [
                'title' => 'Electrician',
                'img' => $this->copyImage($availableImages[6] ?? null),
                'description' => 'Do you have a spark for electrical work and a desire for a challenging and rewarding career? Then, becoming a licensed electrician might be the perfect path to ignite your future! Confidence Training Institute offers a comprehensive and hands-on electrician practical training program designed to equip you with the skills, knowledge, and confidence needed to excel in this in-demand and dynamic field. Through our intensive practical training program, you\'ll gain the ability to understand fundamental electrical theory and principles, master safe handling practices for electrical components and equipment, learn various wiring methods for residential and commercial applications, gain proficiency in installing, maintaining, and troubleshooting electrical systems, interpret electrical codes and blueprints for accurate and compliant work, and practice safe work habits and adhere to OSHA safety regulations.',
            ],
            [
                'title' => 'Blaster Painter',
                'img' => $this->copyImage($availableImages[7] ?? null),
                'description' => 'Looking to gain practical skills and launch a fulfilling career? Look no further than Confidence Training Institute (CTI)! We offer various hands-on training programs designed to equip you with the knowledge, skills, and confidence needed to thrive in your chosen field. Our programs go beyond theory, emphasizing hands-on experience and real-world application. You\'ll learn by doing, practicing your skills in state-of-the-art workshops equipped with industry-standard tools and equipment. Our instructors are highly qualified professionals with extensive industry experience. They are passionate about sharing their knowledge and guiding you towards success in your chosen career path. We understand that everyone has different needs and schedules. We offer day, evening, and weekend classes, allowing you to fit your training around your existing commitments. We are dedicated to your long-term success. We offer career counseling and job placement assistance to help you connect with ideal career opportunities in your chosen field.',
            ],
        ];

        foreach ($courses as $course) {
            ShortCourse::create($course);
        }
    }

    /**
     * Copy image from public/img to storage/app/public/short-courses
     */
    private function copyImage(?string $imageName): ?string
    {
        if (!$imageName) {
            return null;
        }

        $sourcePath = public_path('img/' . $imageName);
        $destinationPath = 'short-courses/' . $imageName;

        if (File::exists($sourcePath)) {
            Storage::disk('public')->put($destinationPath, File::get($sourcePath));
            return $destinationPath;
        }

        return null;
    }
}
