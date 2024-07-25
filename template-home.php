<?php
// Template Name: Home Page

get_header();

$program_overview_sec = get_field("program_overview_section");
?>
<article>
    <section id="get-brochure" class="md:flex">
        <div class="flex-1">
            <figure class="h-full w-full">
                <img class="w-full h-full md:min-h-[700px] object-cover" src="<?php echo get_template_directory_uri() ?>/media/hero-image.webp" alt="" sizes="(max-width: 130px) 100vw, 130px">
                <figcaption></figcaption>
            </figure>
        </div>
        <div class="flex-1 bg-gray-300">
            <div class="md:py-10 md:px-20 p-5 main-form">
                <?php echo do_shortcode('[wpforms id="663" title="true"]');
                ?>
            </div>
        </div>
    </section>
    <section class="md:px-20 md:py-10 p-5 flex md:flex-row flex-col items-center justify-center md:gap-20 gap-10">
        <div class="flex-1">
            <h2 class="md:text-4xl text-2xl text-center font-bold text-[#636363]">
                Program Overview
            </h2>
            <p class="mt-3 text-justify">
                To shape the future of work and the organization of the future, today’s HR leaders and CHRO’s need to reimagine the basic tenets of Human Resource Management. To thrive in this ever-changing and complex ecosystem, HR leaders need a new set of skills and expertise. Cornell’s CHRO Leadership Program is designed to empower senior HR professionals to tackle the challenges of the new normal.
            </p>
        </div>
        <div class="flex-1">
            <ul class="border-2 max-w-[370px] border-primary rounded-3xl px-5 divide-y-2 divide-primary">
                <li class="flex items-center gap-5 py-5 text-primary">
                    <img width="50" src="<?php echo get_template_directory_uri() ?>/media/icon-1.png" alt="icon">
                    <div>
                        <h3 class="text-xl">
                            STARTS ON
                        </h3>
                        <p class="text-2xl font-bold">TBD</p>
                    </div>
                </li>
                <li class="flex items-center gap-5 py-5 text-primary">
                    <img width="50" src="<?php echo get_template_directory_uri() ?>/media/icon-2.png" alt="icon">
                    <div>
                        <h3 class="text-xl">
                            DURATION
                        </h3>
                        <p class="text-2xl font-bold">4 MONTHS</p>
                    </div>
                </li>
                <li class="flex items-center gap-5 py-5 text-primary">
                    <img width="50" src="<?php echo get_template_directory_uri() ?>/media/icon-3.png" alt="icon">
                    <div>
                        <h3 class="text-xl">
                            PROGRAM FEE
                        </h3>
                        <p class="text-2xl font-bold">US$ 4,000</p>
                        <button class="mt-3 block font-bold underline" onclick="emi_form_modal.showModal()">Easy EMI Options Available</button>
                    </div>
                </li>
            </ul>
        </div>
        <dialog style="border-radius: 0 !important;" id="emi_form_modal" class="modal">
            <div class="modal-box rounded-none md:p-10 p-5 md:max-w-[60%]">
                <?php echo do_shortcode('[wpforms id="550" title="true"]'); ?>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>Close</button>
            </form>
        </dialog>
    </section>
    <section class="md:p-20 p-5 bg-[#636363] text-white">
        <h2 class="md:text-4xl text-2xl font-bold mb-16 text-center">
            Program Benefits
        </h2>
        <ul class="list-none flex flex-wrap gap-10 items-center justify-center">
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-1.png" alt="" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    4 Months, LIVE Interactive Sessions
                </p>
            </li>
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-2.png" alt="image" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    Small cohort for impactful learning
                </p>
            </li>
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-3.png" alt="" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    Access to 2000+ Courses
                </p>
            </li>
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-4.png" alt="" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    Peer coaching and feedback
                </p>
            </li>
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-5.png" alt="" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    Regular assessments and leaderboard
                </p>
            </li>
            <li class="space-y-4 text-center w-fit sm:basis-1/4 basis-full flex-1">
                <figure class="flex items-center justify-center">
                    <img height="130" loading="lazy" class="h-[110px] object-contain" src="<?php echo get_template_directory_uri() ?>/media/benefit-6.png" alt="" sizes="(max-width: 130px) 100vw, 130px">
                    <figcaption></figcaption>
                </figure>
                <p>
                    Learn from Cornell faculty
                </p>
            </li>
        </ul>
    </section>
    <section class="md:p-20 p-5">
        <h2 class="md:text-4xl text-2xl font-bold mb-8 text-center text-[#636363]">
            Curriculum
        </h2>
        <div class="space-y-2 max-w-6xl mx-auto">
            <div class="collapse rounded collapse-arrow bg-[#CFCFCF]">
                <input type="radio" name="my-accordion-1" checked />
                <div class="collapse-title md:text-lg font-bold flex items-center md:py-2">HR AS A CXO</div>
                <div class="collapse-content bg-white space-y-5">
                    <div class="md:p-5 space-y-3 pt-5">
                        <p>
                            <strong>a. Strategy and HR</strong> <br>

                            This session will focus on advancing participants’ understanding of how organizations strategically position themselves for competitive advantage. It will emphasize the importance of aligning an organization’s customer value proposition to customers’ unmet needs and of investing in core competencies that enable the organization to deliver on this value <br>
                            proposition consistently and repeatedly. Participants will also consider how influences and trends in the external environment shape organizations’ strategic opportunities and threats over time.
                        </p>

                        <p>
                            <strong>b. HR as a Business Leader</strong> <br>
                            This session will focus on the strategic role played by HR in defining and supporting the employee contributions required to sustain an organization’s core competencies and competitive advantage. It will emphasize the importance of the causal map linking HR investments to business requirements. Frameworks will be introduced to ensure the development of comprehensive HR interventions, discuss how to strategically target HR investments based on workforce partitioning, and consider the role of HR interventions in supporting organizations’ responses to external pressures.
                        </p>
                        <p>
                            <strong>
                                c. Business Intelligence and Analytics for HR Leaders
                            </strong> <br>
                            The session will focus on how organizations are using analytics to guide HR decisionmaking. It will cover several examples of HR analytics in action, discuss common obstacles and how to address them, and review key frameworks. reasons to embrace digital transformation. Equipped with a foundational understanding of people analytics, participants will be positioned to rigorously examine common HR challenges related to hiring top talent, engaging the workforce, managing retention, and more.
                        </p>
                    </div>
                </div>
            </div>
            <div class="collapse rounded collapse-arrow bg-[#CFCFCF]">
                <input type="radio" name="my-accordion-1" />
                <div class="collapse-title md:text-lg font-bold flex items-center md:py-2">HR AS A TALENT LEADER</div>
                <div class="collapse-content bg-white space-y-5">
                    <div class="md:p-5 space-y-3 pt-5">
                        <p>
                            <strong>a. HR and Talent Development</strong> <br>

                            This session will examine current trends and challenges in the field of talent development. It will present a talent development framework and use several case studies to assess how the dimensions are currently being applied within organizations. The session will also present ideas to align future talent development initiatives.
                        </p>

                        <p>
                            <strong>b. HR’s Role in Driving Inclusivity</strong> <br>
                            The session focuses on tackling the challenges of a diverse workforce. Moving beyond diversity towards equity and belongingness.
                        </p>
                        <p>
                            <strong>
                                c. Evoking High Performance </strong> <br>
                            The session will discuss research related to evoking high performance in organizations. At the end of the session, participants will know about research and theory on performance psychology, and will also learn concrete strategies that they can try in their own organization to evoke high performance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="collapse rounded collapse-arrow bg-[#CFCFCF]">
                <input type="radio" name="my-accordion-1" />
                <div class="collapse-title md:text-lg font-bold flex items-center md:py-2">HR AS A CHANGE DRIVER</div>
                <div class="collapse-content bg-white space-y-5">
                    <div class="md:p-5 space-y-3 pt-5">
                        <p>
                            <strong>a. HR Alignment</strong> <br>

                            The session will discuss the value of (and how to assess) alignment of the broader HR function with the organization’s business strategy. It will cover the importance of (and challenges associated with) internal alignment with the HR function itself.
                        </p>

                        <p>
                            <strong>b. Future of Work</strong> <br>
                            Too often, conversations around the Future of Work have too little to do with the future and even less to do with work. This session aims to re-center the conversation around work as opposed to technology and to underscore the ways in which C-suite leaders—not the technology itself—can determine the best outcomes for their organizations and for society at large
                        </p>
                        <p>
                            <strong>
                                c. HR as a Driver of Innovation
                            </strong> <br>
                            This session will examine key organizational structures and HR policies that facilitate knowledge generation and development. Core concepts and theories will be demonstrated using examples from prominent organizations.
                        </p>
                        <p>
                            <strong>
                                d. Leading Change </strong> <br>
                            This session will provide opportunities for self-reflection, practical application, and a forum for sharing experiences and feedback to foster learning while advancing oneself as a change leader.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 space-y-10">
            <div>
                <h3 class="text-xl font-bold text-primary mb-3">Year long access to 2000+ electives</h3>
                <p>
                    Choose from over 2000+ electives that will enhance your knowledge and skills across business functions. With unlimited access to Cornell’s resource library, you will have the opportunity to learn something new, every day. Super-specialize in your area of interest from topics across domains like innovation, leadership, marketing, supply chain, finance, service excellence, operations, project management and more.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-primary mb-3">Regular assessments and leaderboard</h3>
                <p>
                    Participants will be given an assessment to test their acquired knowledge towards the end of the LIVE session. This will help you understand the knowledge gap and further assist you in developing a learning path for yourself. Post-work assignments/tasks will be given after each session to enhance your skills on each topic taught during the LIVE session. The leaderboard scores you against your peers in the learning journey.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-primary mb-3">Peer coaching and feedback</h3>
                <p>
                    Learn from high-achieving peers from around the globe and build your network. The cohort will be divided into triads. You will get a chance to interact, share and exchange ideas with your peers. You can discuss on-going scenarios, solve doubts, work on assignments and receive valuable feedback from like-minded senior leaders globally.
                </p>
            </div>
        </div>
    </section>
    <section class="md:p-20 p-5">
        <div class="text-center">
            <p class="mb-10">
                Indicative content, subject to change based on university guidelines
            </p>
            <figure>
                <img sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/cohort-statistics.jpg" alt="cohort statistics">
                <figcaption class="sr-only"></figcaption>
            </figure>
        </div>
    </section>
    <section class="md:p-10 p-5">
        <h2 class="md:text-4xl text-2xl font-bold mb-8 text-center text-[#636363]">
            Learn from Cornell Faculty
        </h2>
        <ul class="flex md:flex-wrap md:overflow-x-hidden overflow-x-auto md:w-auto w-screen gap-5">
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Rebecca-Kehoe.png" alt="Rebecca Kehoe">
                    <figcaption class="sr-only">Rebecca Kehoe</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Rebecca Kehoe</h3>
                    <p class="mb-3">Associate Prof, Human Resource Studies</p>
                    <p class="text-sm">Rebecca Kehoe is an Associate Professor of Human Resource Studies in the ILR School at Cornell University. She conducts research in the area of strategic human resource management, with an interest in better understanding how and when organizations achieve human resource-based competitive advantage. She holds a Ph.D., M.S., and B.S. from Cornell University. Prior to joining the faculty of the ILR School, she served on the faculty of Rutgers University. She has taught courses in Human Resource Management and Business Strategy.</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Bradford-Bell.png" alt="Bradford Bell">
                    <figcaption class="sr-only">Bradford Bell</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Bradford Bell</h3>
                    <p class="mb-3">William J. Conaty Professor of Strategic Human Resources</p>
                    <p class="text-sm">Bradford S. Bell is the William J. Conaty Professor in Strategic Human Resources and Director of the Center for Advanced Human Resource Studies. He received his B.A. in Psychology from the University of Maryland at College Park and his M.A. and Ph.D. in Industrial and Organizational Psychology from Michigan State University. He worked in the management and organization development department of First USA Bank/Banc One and has worked as an HR consultant for multiple private and public firms. Dr. Bell is a fellow of the Society for Industrial and Organizational Psychology and American Psychological Association.</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/John-Hausknecht.png" alt="John Hausknecht">
                    <figcaption class="sr-only">John Hausknecht</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">John Hausknecht</h3>
                    <p class="mb-3">Professor, Human Resource Studies</p>
                    <p class="text-sm">John Hausknecht is professor of human resource studies at Cornell University’s ILR School. His teaching, research, and consulting focuses on HR analytics and staffing-related topics including employee selection and turnover. Professor Hausknecht recently served as the academic director for Cornell’s ILR Executive Education and currently leads the HR analytics working group series for Cornell’s Center for Advanced HR Studies.</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Diane-Burton.png" alt="M. Diane Burton">
                    <figcaption class="sr-only">M. Diane Burton</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">M. Diane Burton</h3>
                    <p class="mb-3">Joseph R. Rich ’80 Professor, Human Resource Studies and
                        Academic Director, Institute for Compensation Studies </p>
                    <p class="text-sm">M. Diane Burton is a professor in the ILR School at Cornell
                        University. Her primary appointment is in human resource
                        studies with courtesy appointments in organizational behavior
                        and sociology. Prior to joining the Cornell faculty in 2009, she
                        was a faculty member at the MIT Sloan School of Management.
                        She earned her Ph.D. in sociology at Stanford University and
                        served as a lecturer and researcher in organizational behavior
                        and human resources management at the Stanford Graduate
                        School of Business.</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Tae-Youn-Park.png" alt="Tae Youn Park">
                    <figcaption class="sr-only">Tae Youn Park</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Tae Youn Park</h3>
                    <p class="mb-3">Associate Professor, Human Resource Studies</p>
                    <p class="text-sm">Tae-Youn Park (Ph.D., University of Minnesota) is the Associate
                        Professor of Human Resource Studies in the ILR School, Cornell
                        University. His work has been published in many influential
                        journals across disciplines. He currently serves on the editorial
                        board of Academy of Management Journal, Personnel
                        Psychology, and Compensation and Benefit Review. Before
                        joining the ILR School, Tae-Youn was a Brownlee O. Currey Jr.
                        Dean’s Faculty Fellow, assistant professor of Management in
                        the Owen Graduate School of Management. </p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Adam-Seth-Litwin.png" alt="Adam Seth Litwin">
                    <figcaption class="sr-only">Adam Seth Litwin</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Adam Seth Litwin</h3>
                    <p class="mb-3">Associate Professor</p>
                    <p class="text-sm">Adam Seth Litwin is Associate Professor of Industrial and Labor Relations at Cornell’s ILR School and serves as an associate editor at its flagship journal, the ILR Review. Litwin has published a mix of empirical and conceptual studies intersecting the areas of labor relations and technological change, in both industrial relations and medical journals. Litwin joined Cornell’s ILR faculty in the fall of 2014 after serving as a standing faculty member at Johns Hopkins University, where he held appointments in the Carey Business School and the School of Medicine.</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Ben-Rissing.png" alt="Ben Rissing">
                    <figcaption class="sr-only">Ben Rissing</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Ben Rissing</h3>
                    <p class="mb-3">Associate Professor</p>
                    <p class="text-sm">Ben A. Rissing studies employment-relevant decisions in organizations, including businesses, government, and academic institutions. He earned his doctorate in management from the Massachusetts Institute of Technology (MIT) Sloan School of Management; master’s degrees in management science and engineering management from MIT and Duke University, respectively; and a bachelor’s degree in mechanical engineering from the University of Virginia. Before joining Cornell University, Ben was the Hugh W. Pearson Visiting Professor of Commerce, Organizations and Entrepreneurship at Brown University. </p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Lisa-Csencsits.png" alt="Lisa Csencsits">
                    <figcaption class="sr-only">Lisa Csencsits</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Lisa Csencsits</h3>
                    <p class="mb-3">Associate Director</p>
                    <p class="text-sm">Lisa Csencsits, Associate Director for Executive Education at Cornell University, ILR, is responsible for the design, development and delivery of customized learning and capability development programs. Lisa holds a B.A. In Psychology from Adelphi University and a M.A. in Industrial/Organizational Psychology from Hofstra University. Ms. Csencsits, as an Organizational Development Practitioner, leverages her experience working with large privately and publicly held companies, as well as her research and educational expertise to provide programs grounded in theory with practical solutions to enhance participant learning and professional development. </p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col gap-4 p-6 border border-primary md:basis-1/4 basis-[90%] md:shrink shrink-0 flex-1">
                <figure class="shrink-0">
                    <img width="80" height="80" sizes="(min-width: 768px) 40vw, 70vw" loading="lazy" class="md:w-[80px] w-[140px]" src="<?php echo get_template_directory_uri() ?>/media/teachers/Alwin-Smith.png" alt="Alwin Smith">
                    <figcaption class="sr-only">Alwin Smith</figcaption>
                </figure>
                <div>
                    <h3 class="text-lg font-bold">Alwin Smith</h3>
                    <p class="mb-3">Adjunct Instructor</p>
                    <p class="text-sm">Alvin specializes in Executive Development and Diversity Management. He is an Instructor at Cornell University, teaching Diversity & Inclusion. Alvin is a “storyteller” who provides a compelling first-hand account of the lessons he learned, and the experiences he endured during his career. He has a Bachelor of Science in Management from NYU Stern and a Marketing Management degree from Atlanta University Graduate School. He is also an American Management Association certified trainer.</p>
                </div>
            </li>
        </ul>
        <p class="text-gray-500 text-center mt-5">
            <i>
                Indicative faculty, subject to change based on availability and university guidelines
            </i>
        </p>
    </section>
    <section class="md:pt-20 pt-10 border-t-4 border-[#636363]">
        <div class="md:px-20 px-5">
            <h2 class="md:text-4xl text-2xl font-bold mb-8 text-center text-[#636363]">
                Certificate
            </h2>
        </div>

        <figure class="flex justify-center relative z-30">
            <img src="<?php echo get_template_directory_uri() ?>/media/chro-certificate.jpg" width="650" class="md:w-[650px] object-contain w-[90%]" alt="cornell unversitiy program certificate">
            <figcaption class="sr-only">cornell unversitiy program certificate</figcaption>
        </figure>

        <div class="md:px-10 px-5 md:pb-20 pb-10 pt-32 -translate-y-20 -z-10 text-center space-y-2 text-sm font-light bg-primary text-white">
            <p>
                <i>
                    Upon successful completion of the program, participants will be awarded a digitally verifiable certificate by Cornell University
                </i>
            </p>
            <p>
                <i>
                    Note: Certificate image is for illustrative purposes only and may be subject to change at the discretion of Cornell University.
                </i>
            </p>
        </div>
    </section>
    <section class="md:py-20 p-5 pt-10">
        <h2 class="md:text-4xl px-20 text-2xl font-bold mb-8 text-center text-[#636363]">
            Testimonials
        </h2>
        <div class="relative">
            <button class="custom-slick-prev absolute top-1/2 -translate-y-1/2 md:left-3 left-1 text-3xl md:p-3 p-1 rounded-full bg-primary text-white z-[99]"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 12H4m0 0l6-6m-6 6l6 6" />
                </svg></button>
            <button class="custom-slick-next absolute top-1/2 -translate-y-1/2 md:right-3 right-1 text-3xl md:p-3 p-1 rounded-full bg-primary text-white z-[99]"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M13.47 5.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4a.75.75 0 0 1 0-1.5h14.19l-4.72-4.72a.75.75 0 0 1 0-1.06" clip-rule="evenodd" />
                </svg></button>
            <div class="slick-slider-testimonials md:px-10 relative z-0">
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Manisha-Sharma-Prasad.png" alt="Manisha Sharma Prasad">
                            <figcaption class="sr-only">Manisha Sharma Prasad</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                It's been a very insightful journey all through, varied dimensions covered brilliantly with relevant case studies and very interactive sessions with faculty and peers
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Manisha Sharma Prasad</p>
                                <p class="text-lg">
                                    SVP & Head Human Resources
                                    <br>
                                    CRIF India & South Asia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Mainak-Chaki.png" alt="Mainak Chaki">
                            <figcaption class="sr-only">Mainak Chaki</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                Excellent faculty! Their knowledge dissemination and connection with the whole cohort was fantastic.
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Mainak Chaki</p>
                                <p class="text-lg">
                                    Group Head Human Resources
                                    <br>
                                    KK Birla Group
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Shipra-Gairola.png" alt="Shipra Gairola">
                            <figcaption class="sr-only">Shipra Gairola</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                It was good to understand more evolved HR concepts and case studies prevalent across markets.
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Shipra Gairola</p>
                                <p class="text-lg">
                                    SVP & Head Human Resources
                                    <br>
                                    CRIF India & South Asia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Manisha-Sharma-Prasad.png" alt="Manisha Sharma Prasad">
                            <figcaption class="sr-only">Manisha Sharma Prasad</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                It's been a very insightful journey all through, varied dimensions covered brilliantly with relevant case studies and very interactive sessions with faculty and peers
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Manisha Sharma Prasad</p>
                                <p class="text-lg">
                                    SVP & Head Human Resources
                                    <br>
                                    CRIF India & South Asia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Mainak-Chaki.png" alt="Mainak Chaki">
                            <figcaption class="sr-only">Mainak Chaki</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                Excellent faculty! Their knowledge dissemination and connection with the whole cohort was fantastic.
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Mainak Chaki</p>
                                <p class="text-lg">
                                    Group Head Human Resources
                                    <br>
                                    KK Birla Group
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20 px-2.5 h-full">
                    <div class="p-5 relative overflow-visible drop-shadow-lg text-center min-h-[382px] flex flex-col h-full bg-[#efefef]">
                        <figure class="flex absolute -top-16 left-1/2 -translate-x-1/2 justify-center">
                            <img width="120" sizes="(max-width: 130px) 100vw, 120px" loading="lazy" src="<?php echo get_template_directory_uri() ?>/media/reviews/Shipra-Gairola.png" alt="Shipra Gairola">
                            <figcaption class="sr-only">Shipra Gairola</figcaption>
                        </figure>
                        <div class="flex flex-col flex-1 justify-between">
                            <p class="text-xl mt-[70px] mb-0">
                                It was good to understand more evolved HR concepts and case studies prevalent across markets.
                            </p>
                            <div class="mt-5">
                                <p class="uppercase text-lg font-bold text-primary mb-0">Shipra Gairola</p>
                                <p class="text-lg">
                                    SVP & Head Human Resources
                                    <br>
                                    CRIF India & South Asia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-fit border-4 border-primary rounded-xl py-5 px-8 max-w-xl mx-auto">
            <h2 class="md:text-4xl text-2xl font-bold text-primary text-center">
                Who Should Apply?
            </h2>
            <ul class="divide-y-2 text-lg font-medium divide-primary">
                <li class="flex items-center gap-5 py-5">
                    <p>
                        Cornell CHRO Leadership Program is designed for emerging and current CHROs, senior leaders and HR professionals, across geographies and industries, who desire to be agile in thinking and strategic in their approach towards building innovative HR practices to steer business growth.
                    </p>
                </li>
                <li class="flex items-center gap-3 py-5">
                    <svg class="text-xs shrink-0" xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1em" viewBox="0 0 1600 1280">
                        <path fill="currentColor" d="M1575 310q0 40-28 68l-724 724l-136 136q-28 28-68 28t-68-28l-136-136L53 740q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295l656-657q28-28 68-28t68 28l136 136q28 28 28 68" />
                    </svg>
                    <div>
                        <p class="mb-0">10+ years of work experience and proven success in leading high performing teams / impactful projects</p>
                    </div>
                </li>
                <li class="flex items-center gap-3 py-5">
                    <svg class="text-xs shrink-0" xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1em" viewBox="0 0 1600 1280">
                        <path fill="currentColor" d="M1575 310q0 40-28 68l-724 724l-136 136q-28 28-68 28t-68-28l-136-136L53 740q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295l656-657q28-28 68-28t68 28l136 136q28 28 28 68" />
                    </svg>
                    <div>
                        <p class="mb-0">Have at least a Graduate degree</p>
                    </div>
                </li>
                <li class="flex items-center gap-3 py-5">
                    <svg class="text-xs shrink-0" xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1em" viewBox="0 0 1600 1280">
                        <path fill="currentColor" d="M1575 310q0 40-28 68l-724 724l-136 136q-28 28-68 28t-68-28l-136-136L53 740q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295l656-657q28-28 68-28t68 28l136 136q28 28 28 68" />
                    </svg>
                    <div>
                        <p class="mb-0">Country of residence at the time of enrolling must be Latin America, South Asia, Middle East, Africa, Far East</p>
                    </div>
                </li>
            </ul>
            <div class="flex justify-center">
                <a href="/eligibility" class="no-underline hover:text-white/80 block px-5 font-medium uppercase py-3 rounded bg-primary text-white w-fit text-center">Apply Now</a>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>
                The ILR School at Cornell University is collaborating with XED to offer a portfolio of high-impact programs for senior leaders.
            </p>
        </div>
        <div class="mt-10 md:px-20 px-5">
            <h2 class="md:text-4xl text-2xl font-bold mb-8 text-center text-[#636363]">
                Inquire for your organization
            </h2>
            <p>
                We feel that taking this program with your colleagues facilitates communication and accelerates impact in your organization. This also helps in having meaningful discussions with each other.
            </p>
            <p class="my-5">
                Learn with your colleagues and friends. We offer special discounts for groups
            </p>
            <div class="flex justify-center">
                <a href="/get-in-touch" class="block no-underline hover:text-primary/80 px-5 font-medium uppercase py-3 rounded border border-primary text-primary w-fit text-center border-solid">Get In Touch</a>
            </div>
            <p class="mt-5">
                Please note that in the event of a global or regional catastrophe, or any unforeseen circumstances, the Program’s schedule, delivery method, faculty, and associated elements are subject to change at the sole discretion of the university.
            </p>
        </div>
    </section>
</article>
<?php get_footer() ?>