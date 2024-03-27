<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <nav id="navi">
          <ul>
            <li><a href="#page-1">Education</a></li>
            <li><a href="#page-2">Experience</a></li>
            <li><a href="#page-3">Skills</a></li>
            <li><a href="#page-4">Awards</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-md-9">
        <div id="page-1" class="page one">
          <h2 class="heading">Education</h2>
          <div class="resume-wrap d-flex ftco-animate">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ideas"></span>
            </div>
            <div class="text pl-3">
              <span class="date">2020-2023</span>
              <h2>Software Engineering  &amp; Embedded System</h2>
              <span class="position">Rwanda Coding Academy</span>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
          <div class="resume-wrap d-flex ftco-animate">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ideas"></span>
            </div>
            <div class="text pl-3">
              <span class="date">2017-2019</span>
              <h2>Ordinary National Education</h2>
              <span class="position">Lycee De Kigali</span>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>

        <div id="page-2" class="page two">
          <h2 class="heading">Experience</h2>
          <?php
          $experiences = array(
            array(
              "date" => "2024-Present",
              "position" => "Software Engineer Intern",
              "company" => "Coseke",
              "description" => "- Actively involved in the development of core banking systems, internet banking platforms, and data warehouse solutions, ensuring their continuous improvement and functionality.<br>- Design and implement robust fraud monitoring and prevention mechanisms to uphold security standards and protect sensitive financial data.<br>- Contribute to the creation of revenue assurance tools aimed at optimizing revenue streams and enhancing operational efficiency within the banking environment.<br>- Collaborate closely with cross-functional teams to deliver exceptional customer service through the development of innovative software solutions tailored to meet client needs.<br>- Regularly conduct code reviews and provide valuable feedback to enhance and optimize banking software components, ensuring code quality and adherence to best practices."
            ),
            array(
              "date" => "2023-2023",
              "position" => "Full-stack Software Engineer (Online Education Platform)",
              "company" => "Kiac",
              "description" => "- Led the development of a comprehensive online education platform, handling both frontend and backend responsibilities<br>- Designed and implemented features for managing students, courses, teachers, and reports<br>- Developed RESTful APIs and backend services using Node.js and Express.js, and frontend interfaces using React.js<br>- Integrated authentication and authorization mechanisms to ensure secure access to platform resources<br>- Implemented real-time communication features such as chat and notifications for improved user engagement<br>- Utilized MongoDB and MySQL databases for data storage and retrieval, optimizing queries for performance<br>- Collaborated closely with UI/UX designers to create intuitive and responsive user interfaces<br>- Managed agile development processes including sprint planning, backlog grooming, and retrospectives"
            ),
            array(
              "date" => "2022-2023",
              "position" => "Backend Software Engineer",
              "company" => "Emateli",
              "description" => "- Designed and developed robust backend systems using Node.js, Java, and PHP<br>- Implemented authentication and authorization mechanisms for secure API access<br>- Performed database schema design and optimization for MySQL, MongoDB, and PostgreSQL databases<br>- Integrated third-party APIs for seamless functionality within applications<br>- Utilized CI/CD pipelines for automated testing and deployment processes"
            ),
            array(
              "date" => "2021-2023",
              "position" => "Backend Software Engineer (E-commerce)",
              "company" => "Maks.",
              "description" => "- Developed and maintained backend systems for e-commerce platforms using Node.js and PHP<br>- Implemented features such as product catalog, shopping cart, and payment gateways<br>- Integrated with third-party APIs for inventory management and shipping logistics<br>- Optimized database queries and caching strategies to improve performance and scalability<br>- Collaborated with frontend developers to ensure seamless user experiences<br>- Participated in sprint planning, daily stand-ups, and code reviews in an agile environment"
            )
          );

          foreach ($experiences as $experience) {
          ?>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-ideas"></span>
              </div>
              <div class="text pl-3">
                <span class="date"><?php echo $experience["date"]; ?></span>
                <h2><?php echo $experience["position"]; ?></h2>
                <span class="position"><?php echo $experience["company"]; ?></span>
                <p><?php echo $experience["description"]; ?></p>
              </div>
            </div>
          <?php
          }
          ?>






        </div>
        <div id="page-3" class="page three">
          <h2 class="heading">Skills</h2>
          <div class="row progress-circle mb-5">
            <div class="col-lg-4 mb-4">
              <div class="bg-white rounded-lg shadow p-4">
                <h2 class="h5 font-weight-bold text-center mb-4">Backend & APIs & DevOps</h2>

                <div class="progress mx-auto" data-value="90">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
                  </div>
                </div>


                <div class="row text-center mt-4">
                  <div class="col-6 border-right">
                    <div class="h4 font-weight-bold mb-0">58%</div><span class="small text-gray">Last Year</span>
                  </div>
                  <div class="col-6">
                    <div class="h4 font-weight-bold mb-0">80%</div><span class="small text-gray">Last month</span>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="bg-white rounded-lg shadow p-4">
                <h2 class="h5 font-weight-bold text-center mb-4">Database Management </h2>

                <div class="progress mx-auto" data-value="70">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">70<sup class="small">%</sup></div>
                  </div>
                </div>


                <div class="row text-center mt-4">
                  <div class="col-6 border-right">
                    <div class="h4 font-weight-bold mb-0">40%</div><span class="small text-gray">Last week</span>
                  </div>
                  <div class="col-6">
                    <div class="h4 font-weight-bold mb-0">30%</div><span class="small text-gray">Last month</span>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="bg-white rounded-lg shadow p-4">
                <h2 class="h5 font-weight-bold text-center mb-4">Frontend & Frameworks</h2>

                <div class="progress mx-auto" data-value="75">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
                  </div>
                </div>


                <div class="row text-center mt-4">
                  <div class="col-6 border-right">
                    <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last week</span>
                  </div>
                  <div class="col-6">
                    <div class="h4 font-weight-bold mb-0">40%</div><span class="small text-gray">Last month</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="row">

            <?php
            $skills = array(
              "Stack" => array(
                "NodeJS" => 90,
                "MongoDB" => 90,
                "ExpressJS" => 85,
                "TypeScript" => 80,
                "NestJS" => 85,
                "Version Control" => 90,
                "RESTful API" => 85,
                "Laravel" => 85,
                "TypeORM" => 80,
                "ReactJS" => 80,
                "GraphQL" => 85
              ),
              "Other" => array(
                "PostgreSQL" => 75,
                "AWS (EC2, S3, Route53)" => 60,
                "Firebase" => 75,
                "Cloud Functions" => 70,
                "Paystack REST API" => 80,
                "Spring Security & Hibernate" => 70,
                "CircleCI" => 80,
                "CI/CD" => 70,
                "React Native" => 65,
                "Springboot" => 70,

                "Unit Testing " => 50,
              )
            );

            foreach ($skills as $category => &$items) {
              arsort($items); // Sort skills based on percentage from highest to lowest

              foreach ($items as $item => $percentage) {
                echo '<div class="col-md-6 animate-box">';
                echo '<div class="progress-wrap ftco-animate">';
                echo '<h3>' . $item . '</h3>';
                echo '<div class="progress">';
                echo '<div class="progress-bar color-4" role="progressbar" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $percentage . '%">';
                echo '<span>' . $percentage . '%</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            }
            ?>




          </div>
        </div>
        <div id="page-4" class="page four">
          <h2 class="heading">Awards</h2>
          <div class="resume-wrap d-flex ftco-animate">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ideas"></span>
            </div>
            <div class="text pl-3">
              <span class="date">2014-2015</span>
              <h2>Art &amp; Creative Director</h2>
              <span class="position">Cambridge University</span>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>