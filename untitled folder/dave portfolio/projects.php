<?php
  $currentPage = 'projects';
  $pageTitle = 'CV Template';
  $metaDescription = 'Clean editable CV template.';
  include __DIR__ . '/includes/header.php';
?>

    <main>
      <section class="page-hero">
        <div class="container narrow">
          <p class="eyebrow">Curriculum Vitae</p>
          <h1>Your Name</h1>
          <p class="lede">Your Role • Specialty • Focus</p>
        </div>
      </section>

      <section class="section">
        <div class="container cv-layout">
          <aside class="cv-sidebar">
            <div class="cv-panel">
              <h3>Contact</h3>
              <ul>
                <li>Email: your@email.com</li>
                <li>Phone: +00 000 000 000</li>
                <li>Website: yoursite.com</li>
              </ul>
            </div>

            <div class="cv-panel">
              <h3>Skills</h3>
              <ul>
                <li>Skill one</li>
                <li>Skill two</li>
                <li>Skill three</li>
                <li>Skill four</li>
                <li>Skill five</li>
                <li>Skill six</li>
              </ul>
            </div>

            <div class="cv-panel">
              <h3>Education</h3>
              <p><strong>Degree / Qualification</strong><br>Institution, Year</p>
            </div>
          </aside>

          <div class="cv-main">
            <div class="cv-section">
              <h2>Profile</h2>
              <p>
                Brief professional summary. Add a short paragraph about your background, strengths,
                and what you bring to a role or project.
              </p>
            </div>

            <div class="cv-section">
              <h2>Experience</h2>

              <div class="cv-item">
                <div class="cv-meta">
                  <span>Year — Year</span>
                </div>
                <div>
                  <h3>Job Title</h3>
                  <p class="cv-company">Company Name</p>
                  <ul>
                    <li>Describe your responsibilities and key achievements.</li>
                    <li>Highlight measurable impact, leadership, or project ownership.</li>
                    <li>Include a result, contribution, or notable outcome.</li>
                  </ul>
                </div>
              </div>

              <div class="cv-item">
                <div class="cv-meta">
                  <span>Year — Year</span>
                </div>
                <div>
                  <h3>Previous Role</h3>
                  <p class="cv-company">Company Name</p>
                  <ul>
                    <li>Describe your role and responsibilities.</li>
                    <li>Show how you added value to the team or organization.</li>
                    <li>Keep this concise and easy to edit.</li>
                  </ul>
                </div>
              </div>

              <div class="cv-item">
                <div class="cv-meta">
                  <span>Year — Year</span>
                </div>
                <div>
                  <h3>Earlier Role</h3>
                  <p class="cv-company">Company Name</p>
                  <ul>
                    <li>Add relevant experience, internships, freelance work, or projects.</li>
                    <li>Focus on skills that support the role you want next.</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="cv-section">
              <h2>Highlights</h2>
              <ul class="highlight-list">
                <li>Key achievement or result.</li>
                <li>Relevant expertise or standout skill.</li>
                <li>Project, award, certification, or measurable success.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
