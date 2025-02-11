<?php defined('BASEPATH') OR exit('No direct script access allowed');

class App_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->app 	= &get_instance();
        
	}


    public function sdata()
	{
		return json_decode(json_encode([
            "bio" => [
                "name"              => "Spencer Lowy",
                "title"             => "Senior Project Manager / Tech. Advisor",
                'summary'           => "A results-driven Project Manager with 8+ years of experience leading high-profile sports technology and broadcast integration projects for global events, including the Olympics, Roland Garros, and the Australian Open. Proven ability to manage multi-million-dollar projects, oversee cross-functional teams of 20+ professionals, and implement Agile methodologies to improve efficiency and execution. Adept at logistics coordination, risk management, and vendor relations, with a strong track record of delivering on-time, within-budget solutions. Experience working with international clients and diverse cultures, traveling 130+ days per year to manage on-site operations worldwide. Exceptional leadership in on-venue results management (OVR), ensuring accurate match scoring and data dissemination for global audiences. Passionate about driving innovation, optimizing workflows, and enhancing live sports broadcasting experiences through cutting-edge technology and strategic execution.",
                'height'            => "5'9",
                'weight'            => "150lb",
                'born'              => "Miami, FL",
                'current_residence' => "Jacksonville Beach, FL",
                'current_employer'  => "SMT (SMT.com)",
                'current_role'      => "Tennis Technical Advisor / SMT Project Manager",
                'current_projects'  => "Olympics - Omega Contract, Australian",
                'open'              =>  "Tennis Australia",
            ],
			'education' => [
                'institution'       => "Florida State University",
                'major'             => "Information Communication Technology",
                'minor'             => "Business",
			    'fraternity'        => "Delta Tau Delta",
                'graduated'         => "2016",
            ],
			'experiences'    => [
                [
                    "company" => "SMT (SportsMEDIA Technology Corp",
                    "designation" => "Project Manager",
                    "start" => "09/2016",
                    "end" => "Present",
                    "responsibilities" => [
                        "Led a team of 15-20+ professionals to successfully complete a $2M project within 6 months, improving project delivery time by 25% through Agile methodologies.",
                        "Developed and implemented strategic business planning processes, increasing project efficiency by 30% while managing a $5M portfolio using MS Project and Agile frameworks.",
                        "Spearheaded the planning and execution of multiple stadium infrastructure projects valued at $50M, ensuring on-time delivery and budget adherence while achieving an average ROI increase of 15%.",
                        "Oversaw the procurement and installation of physical equipment for a $5M project, optimizing vendor selection and logistics to reduce setup time by 20%.",
                        "Lead on-site execution and logistics for high-profile SMT events, ensuring seamless setup, operation, and breakdown while maintaining adherence to contractual obligations, budget constraints, and project timelines.",
                        "Manage teams and third-party vendors to coordinate equipment preparation, software integration, and logistical requirements, optimizing efficiency in multi-service event operations.",
                        "Provide leadership in User Acceptance Testing (UAT) and team training, mentoring junior project managers and refining operational processes to enhance service quality and event execution.",
                        "Spearhead risk management initiatives to mitigate delays, ensuring on-time and within-budget delivery of high-value projects.",
                        "Served as SMT Project Manager for major global events, including Roland Garros Tennis, the Olympic Games (Tennis), and the Australian Open.",
                        "Manage the planning, coordination, and execution of SMT services at high-profile, multi-service events, ensuring seamless on-site setup, operation, and breakdown of equipment.",
                        "Manage teams, vendors, and resources to deliver services efficiently and within project scope, budget, and timelines.",
                        "Oversaw equipment logistics, including preparation, testing, inventory management, and transportation, adhering to SMT's established procedures and best practices.",
                        "Conducted risk assessments and implemented mitigation strategies to ensure project continuity and on-site safety at major events.",
                    ]
                ],
                // [
                //     "company" => "",
                //     "designation" => "",
                //     "start" => "",
                //     "end" => "",
                //     "responsibilities" => [
                //         "",
                //         "",
                //         "",
                //     ]
                // ],
            ],
			'pme' => [
                [
                    "event" => "Roland Garros (French Open)",
                    "client" => "HBS / FFT",
                    "worked" => [
                        [
                            "year" => "2018 - 2024 (7 years)", 
                            "designation" => "SMT Project Manager",
                        ],
                        [
                            "year" => "2020 - 2024 (5 years)", 
                            "designation" => "SMT Project Manager",
                        ],
                    ],
                    "service" => "TV Host Broadcast Graphics, IPTV System",
                    "role" => "SMT Project Manager / RG Graphics Manager",
                    "team_size" => "20+ (Full-Time Staff & French Contractors)",
                    "responsibilities" => [
                        "Managed a team of 20+ professionals, overseeing the execution of TV broadcast graphics and IPTV systems for one of the world's premier tennis tournaments.",
                        "Led staff scheduling, including rostering, training, and real-time operational coordination.",
                        "Oversaw all travel, accommodations (hotel, Airbnb), and per diem logistics for on-site teams.",
                        "Directed end-to-end equipment logistics, including preparation, international shipping, ATA Carnet compliance, installation, and on-site support.",
                        "Supervised on-air TV graphics integration and operation, ensuring seamless broadcast-quality execution.",
                        "Developed and executed operational plans for event preparation, execution, and post-event debriefing.",
                    ]
                ],
                [
                    "event" => "Australian Open",
                    "client" => "Tennis Australia (TA)",
                    "worked" => [
                        [
                            "year" => "2017 - 2018, 2021 - 2025 (7 years)", 
                            "designation" => "SMT Project Manager",
                        ],
                        [
                            "year" => "2024 - 2025 (2 years)", 
                            "designation" => "SMT Project Manager",
                        ],
                    ],
                    "service" => "SMT Scoring Management & System, Data Integration, Tennis Displays, Scoreboard Services",
                    "role" => "SMT Project Manager",
                    "team_size" => "20+ Full-Time Staff",
                    "responsibilities" => [
                        "Led the implementation and support of SMT’s scoring system, ensuring accurate and reliable match scoring throughout the tournament.",
                        "Managed and coordinated travel, accommodations, and logistics for a 20+ person team, optimizing efficiency and cost-effectiveness.",
                        "Supervised equipment logistics, including preparation, shipping, ATA Carnet management, and installation.",
                        "Facilitated seamless data integration with third-party vendors for official tournament websites, TV graphics, and betting platforms.",
                        "Developed and managed staff schedules to ensure adequate coverage and operational excellence.",
                    ]
                ],
                [
                    "event" => "Olympic Games (Tokyo 2020 & Paris 2024)",
                    "client" => "Omega",
                    "worked" => [
                        [
                            "year" => "2018 – 2021 (Tokyo 2020), 2021 – 2024 (Paris 2024)", 
                            "designation" => "SMT Project Manager",
                        ],
                        [
                            "year" => "2018 – 2021 (Tokyo 2020), 2021 – 2024 (Paris 2024)", 
                            "designation" => "SMT Project Manager",
                        ],
                    ],
                    "service" => "SMT Scoring Management & System, Data Integration, Tennis Displays, Scoreboard Services",
                    "role" => "SMT Project Manager",
                    "team_size" => "5 Full-Time Staff",
                    "responsibilities" => [
                        "Directed a dedicated scoring and data integration team for Olympic tennis events, ensuring flawless execution under high-stakes conditions.",
                        "Managed team logistics, including travel, accommodations, and on-site support, optimizing operational efficiency.",
                        "Oversaw the preparation, shipment, and installation of scoring and display equipment, ensuring compliance with international logistics standards.",
                        "Ensured the SMT Scoring System functioned seamlessly for every Olympic match, maintaining real-time accuracy and integration with various broadcast and digital platforms.",
                        "Coordinated data feeds with third-party vendors for live match updates, television graphics, and betting market integrations.",
                        "Developed and executed staff schedules, ensuring optimal coverage and resource allocation.",
                    ]
                ],
            ],
            "skills" => [
                "Project Management",
                "Agile Methodologies",
                "Event Logistics & Operations",
                "Sports Technology & Data Integration",
                "Team Leadership",
                "Risk Management & Mitigation",
                "Vendor & Stakeholder Management",
                "Budget Management",
                "On-Venue Results Management ",
                "Equipment Procurement & Installation",
                "Scheduling & Workforce Management",
                "Strategic Planning ",
            ],
            'contact' => [
                'email'  => "spenceralowy@gmail.com",
			    'phone'  => "9042354104",
            ],
			'social'  => [
                "facebook"   => "https://www.linkedin.com/in/spencer-lowy-4a04a6112",
                "instagram"  => "https://www.instagram.com/p/C45vQYjuQD_/?igsh=aXR6bHp3ZHVjcm5l",
                "twitter"    => "https://www.linkedin.com/in/spencer-lowy-4a04a6112",
                "linkedin"   => "https://www.linkedin.com/in/spencer-lowy-4a04a6112",
                "github"     => "https://www.linkedin.com/in/spencer-lowy-4a04a6112",
            ],
            "abnbe" => [
                [
                    "name"      => "Mackenzi",
                    "comment"   => "10/10 experience! Booked for my mom, sister and I, and it exceeded our expectations. So much fun learning so many different things from Spencer! Definitely would book again!!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/a0e06f38-aa65-4144-ae77-31e139a16814.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Kellyn",
                    "comment"   => "Absolutely amazing! My fiancée and I booked this experience with slight hesitation (seeing as we didn’t know anything about Jacksonville or the host) - however.. the experience was marvelous. Spencer had numerous surprises throughout the night and was so encouraging throughout the cooking process. He opened his home and family recipes to us, and we are so grateful.",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/baa55b4a-c810-42b8-b892-5d479645d5b8.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Carl",
                    "comment"   => "You will NOT regret booking with Spencer. Such a fun guy sharing an amazing passion— we came here for our honeymoon and left feeling inspired! Beautiful setup, inviting atmosphere, and tasty ingredients! Best pasta I’ve ever had!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/User-110551898/original/e571fa26-8c16-4648-ba11-d9affb4e8af9.jpeg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Rachael",
                    "comment"   => "Book this now!!! If you want to have a romantic date with your partner or just some fun with your friends, this is the experience for you. Spencer went above and beyond with everything including presentation, explanations, and food! 10/10 and we will definitely be back.",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/3766bb3a-5f2e-455a-a043-6b63e0068982.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Kristie",
                    "comment"   => "Spencer was an amazing host. There were so many thoughtful touches and even a few extra “surprises “! The food was awesome and learning to make fresh pasta now seems doable. I highly recommend this fabulous experience!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/45b31d0f-c6d2-4f86-a163-fe6d75daac1d.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Brandy",
                    "comment"   => "Our pasta making experience was the best part of our week's stay in Jacksonville, FL. Spencer was a great host and instructor. Our impromptu group was so friendly and engaging. It made our experience so much more enjoyable!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/ee89b333-454f-4e91-bec8-32481e5a65a0.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Reggie",
                    "comment"   => "I booked this experience as a date night for my wife and I. We had an AMAZING time! Spencer was an exceptional host. He was very patient an thoroughly explained each step of the pasta making process. Ther’s unlimited wine, dessert, and a few surprises along the way. We finished the night with homemade Limoncello! We can’t wait to book again!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/06142429-4490-4cab-9b9e-2bb48e47ac12.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Charmica",
                    "comment"   => "This is a MUST experience!! The whole evening from start to finish was amazing! Spencer was a fabulous host and teacher and Terry was great at server and made us feel well taken cared of! My family loved every minute of it. The food, music and entertainment was beyond 5 stars!! I would definitely do the Pasta-bilities experience again.",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/cd8294c8-13e5-40d4-8c24-6487b897b006.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Sophie",
                    "comment"   => "Thank you Spencer, great evening. Unique experience and wonderful evening spent with friends. Would highly recommend, lots of personal touches. Perfect balance of host input and just relaxing with your group. He also accommodated us on a date that wasn’t advertised so we appreciated that! Thank you!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/6933d1ab-cf89-42c2-b680-8f2c2ff27586.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Eulices",
                    "comment"   => "Didn’t know what to expect when walking in, but Spencer made it super easy and fun. Great conversationalist and helper. Walked us step by step on how to make ravioli. The ambiance was amazing and the food ending up tasting stupendous. Definitely recommend you check it out if you get a chance",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/85a705f8-4ffa-4d79-b327-21f91fe93e5e.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Nikki",
                    "comment"   => "Pasta-bilities with Spencer is a wonderful experience!! I selected this activity as a surprise dinner for my husband and we both greatly enjoyed it. The moment we arrived we were welcomed into a comfortable, serene outdoor kitchen/dining area. Spencer's passion for cooking his Italian family's favorite dishes is heartwarming and delightfully contagious. The easy-flow of our dinner prep experience included enjoying red wine and delicious appetizers made by our host. We followed each step of the pasta-making process whi h was patiently demonstrated by Spencer. His stories and humor made every moment fun and special for us. We finished the event by savoring our own personally handmade raviolis and creating memories with our new talented, culinary friend! WE HIGHLY RECOMMEND THIS EXPERIENCE TO ANYONE!!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/f18d39a2-482c-43a5-88af-5bfeafcbeb1b.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Shanon",
                    "comment"   => "Spencer goes over and beyond to make this experience wonderful!! It was our second time going and we brought my mom and step dad for Christmas gift! Worth the money!! Amazing food and great time to have fun making it as well!!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/d8177015-7e9b-4998-8b63-b10bb4a49cbb.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Courtney",
                    "comment"   => "This was magical. My family are Italians and we make our own pasta but this was above and beyond our expectations. You are learning and laughing and the atmosphere is so romantic and quaint. We will do this again and again! Loved Spencer! He was professional and so educational in the pasta making department!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/70eea51a-b50f-4b96-98a4-d2cac54c227d.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Marie",
                    "comment"   => "My family and I were visiting from Chicago and decided to book this experience. We brought the rain and cold weather with us apparently :( Spencer was such a wonderful host and made us feel welcome. He had a fire pit and heat lamp going when we walked in. From beginning to end we became more and more impressed! The food was amazing, the setup was beautifully done. Spencer was def the best air B and B host I have experienced. He want out of his was to add thoughtful touches and really made the night memorable for my moms birthday! 100 percent 10 out of 10! And the food…. delizioso! Thank you for the memories Spencer!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/63f641e9-464a-48ab-880a-459054cbd98f.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Christina",
                    "comment"   => "What an absolutely wonderful evening. Really cute cosy atmosphere. It was cold, so Spencer lit a bonfire which was a lovely touch. The class was so much fun! Great presentation and excellent host! Definitely telling all our family & friends about this unique spot!",
                    "imgUrl"    => "https://a0.muscache.com/im/users/41817966/profile_pic/1439919593/original.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Peggy",
                    "comment"   => "This experience was above and beyond our expectations! Spencer transported us to Tuscany in his own backyard. The atmosphere was perfect, the food was wonderful, he thought of everything. I won’t tell you all the special touches… you just have to experience it for yourself!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/5f8d2142-dbe4-475f-b0bc-0dce7dca9123.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Macrae",
                    "comment"   => "This was an amazing experience!Spencer went above and beyond to welcome us and guide us through the art of pasta making. We enjoyed an evening filled with great people, good wine and amazing food. I would highly recommend this experience to anyone staying in the Jacksonville area who is seeking an authentic Italian experience.",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/c7d8baef-5ebd-457c-ab7d-97e72bfbcbfe.jpg?im_w=240&im_format=avif",
                ],
                [
                    "name"      => "Elizabeth",
                    "comment"   => "My boyfriend and I booked this experience a few weekends ago for our anniversary and it was amazing!! The entire setup was beautiful and it definitely had the right vibe for our celebration. Spencer was an awesome host and we enjoyed the stories he shared with us while we cooked. There were even activities to occupy us while we waited. It was so much fun I 10/10 recommended!",
                    "imgUrl"    => "https://a0.muscache.com/im/pictures/user/User/original/3954ff1c-6ca9-4437-9ff5-f6cfa923fc98.jpeg?im_w=240&im_format=avif",
                ],
            ]
		]));
	}

    public function data()
    {
        $fetch = $this->app->glob('web_settings', '*', []);

        $overview = json_decode($fetch->overview);
        $education = json_decode($fetch->education);
        $experiences = json_decode($fetch->experiences);
        $smt_experiences = json_decode($fetch->smt_experiences);
        $air_bnb_experiences = json_decode($fetch->air_bnb_experiences);

        // return $overview;


        return json_decode(json_encode([
            "header" => [
                "name"              => isset($overview->header_full_name) ? $overview->header_full_name : "",
                "title"             => isset($overview->header_pro_title) ? $overview->header_pro_title : "",
                "following_url"     => isset($overview->header_following_url) ? $overview->header_following_url : "",
                "college"           => isset($overview->header_college) ? $overview->header_college : "",
                "graduated"         => isset($overview->header_graduated) ? $overview->header_graduated : "",
                "resideence"        => isset($overview->header_resideence) ? $overview->header_resideence : "",
                "birth_place"       => isset($overview->header_birth_place) ? $overview->header_birth_place : "",
                "stat_hts"          => isset($overview->stat_hts) ? $overview->stat_hts : "",
                "stat_wts"          => isset($overview->stat_wts) ? $overview->stat_wts : "",
                "stat_ast"          => isset($overview->stat_ast) ? $overview->stat_ast : "",
                "stat_fg"           => isset($overview->stat_fg) ? $overview->stat_fg : "",
            ],
            "summary"               => isset($overview->summary) ? $overview->summary : "",
            "contact"               => [
                "email"             => isset($overview->contact_email) ? $overview->contact_email : "",
                "phone"             => isset($overview->contact_email) ? $overview->contact_email : "",
            ],
            "bio"                   => [
                "name"              => isset($overview->bio_name) ? $overview->bio_name : "",
                "height"            => isset($overview->bio_height) ? $overview->bio_height : "",
                "weight"            => isset($overview->bio_weight) ? $overview->bio_weight : "",
                "current_employer"  => isset($overview->bio_current_employer) ? $overview->bio_current_employer : "",
                "current_role"      => isset($overview->bio_current_role) ? $overview->bio_current_role : "",
                "current_project"   => isset($overview->bio_current_project) ? $overview->bio_current_project : "",
                "current_residence" => isset($overview->bio_current_residence) ? $overview->bio_current_residence : "",
                "born_in"           => isset($overview->bio_born_in) ? $overview->bio_born_in : "",
            ],
            "social"                => [
                "facebook"          => isset($overview->social_facebook) ? $overview->social_facebook : "",
                "instagram"         => isset($overview->social_instagram) ? $overview->social_instagram : "",
                "twitter"           => isset($overview->social_twitter) ? $overview->social_twitter : "",
                "linkedin"          => isset($overview->social_linkedin) ? $overview->social_linkedin : "",
            ],
            "education"             => [
                "institution"       => isset($education->edu_institution) ? $education->edu_institution : "",
                "major"             => isset($education->edu_major) ? $education->edu_major : "",
                "minor"             => isset($education->edu_minor) ? $education->edu_minor : "",
                "fraternity"        => isset($education->edu_fraternity) ? $education->edu_fraternity : "",
                "graduated"         => isset($education->edu_graduated) ? $education->edu_graduated : "",
            ],
            "skills"                => isset($education->edu_skills) ? $education->edu_skills : [],
            "experiences"           => isset($experiences) ? $experiences : [],
            "smt_experiences"       => isset($smt_experiences) ? $smt_experiences : [],
            "air_bnb_experiences"   => isset($air_bnb_experiences) ? $air_bnb_experiences : [],
		]));
    }



    public function glob($table_name, $select_data, $where = array(), $type = false, $db = false)
	{
		$db = ($db == false) ? 'db' : $db;
		$this->$db->select($select_data);
		$this->$db->where($where);
		$query = $this->$db->get($table_name);

		return ($query->num_rows() > 0) ? (($type == false) ? $query->row() : ((strtolower($type) == 'all') ? $query->result() : $query->row())) : false;
	}


}

