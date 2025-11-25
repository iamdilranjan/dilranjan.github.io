<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dilranjan | AI/ML & Automation Engineer</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    /* ================================================================
       THEME (SHARP, CORPORATE, NO BIG RADIUS)
    ================================================================ */
    :root {
      --bg-main: #020617;
      --bg-surface: #020818;
      --bg-card: #020a1f;

      --border-subtle: rgba(148, 163, 184, 0.25);
      --border-strong: rgba(17, 17, 132, 0.8);

      /* BRAND COLOR */
      --blue-primary: #111184;
      --blue-soft: #111184;
      --blue-subtle: #0b0b5c;

      --text-main: #f9fafb;
      --text-muted: #9ca3af;
      --text-soft: #e5e7eb;

      --radius-xl: 8px;
      --radius-lg: 6px;
      --radius-md: 4px;
      --radius-pill: 999px;

      --shadow-soft: 0 10px 30px rgba(0, 0, 0, 0.65);
      --shadow-strong: 0 22px 60px rgba(0, 0, 0, 0.9);
    }

    html {
      scroll-behavior: smooth;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    body {
      background: radial-gradient(circle at top, rgba(15, 23, 42, 0.9), #020617 58%, #000 100%);
      color: var(--text-main);
      -webkit-font-smoothing: antialiased;
      color-scheme: dark;
      position: relative;
      min-height: 100vh;
    }

    /* Subtle grid / pattern */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image:
        linear-gradient(to right, rgba(15, 23, 42, 0.4) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(15, 23, 42, 0.4) 1px, transparent 1px);
      background-size: 44px 44px;
      opacity: 0.18;
      pointer-events: none;
      z-index: -1;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button {
      font-family: inherit;
    }

    /* ================================================================
       PAGE SHELL
    ================================================================ */
    .page-shell {
      max-width: 1180px;
      margin: 0 auto;
      padding: 1.8rem 1.4rem 2.4rem;
    }

    .page-frame {
      border-radius: 10px;
      border: 1px solid rgba(17, 17, 132, 0.7);
      box-shadow:
        0 0 0 1px rgba(15, 23, 42, 0.9),
        0 26px 80px rgba(0, 0, 0, 0.9);
      background: radial-gradient(circle at top, rgba(15, 23, 42, 0.96), #020617);
      overflow: hidden;
    }

    main {
      max-width: 1040px;
      margin: 0 auto;
      padding: 3.8rem 1.6rem 3.4rem;
    }

    section {
      margin-bottom: 4rem;
      opacity: 0;
      transform: translateY(12px);
      transition: opacity 0.35s ease-out, transform 0.35s ease-out;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 640px) {
      main {
        padding: 3rem 1.25rem 3rem;
      }
      section {
        margin-bottom: 3.2rem;
      }
      .page-shell {
        padding: 1.2rem 0.5rem 1.8rem;
      }
    }

    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #020617;
    }
    ::-webkit-scrollbar-thumb {
      background: rgba(148, 163, 184, 0.5);
      border-radius: 999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: rgba(148, 163, 184, 0.9);
    }

    /* ================================================================
       HEADER
    ================================================================ */
    header {
      background: rgba(2, 6, 23, 0.97);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--blue-primary);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.8);
      position: sticky;
      top: 0;
      z-index: 50;
    }

    .nav-inner {
      max-width: 1040px;
      margin: 0 auto;
      padding: 0.7rem 1.6rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
    }

    .brand-block {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .brand-mark {
      width: 32px;
      height: 32px;
      border-radius: 4px;
      border: 1px solid rgba(148, 163, 184, 0.9);
      background: #020617;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.78rem;
      letter-spacing: 0.08em;
      color: #e5e7eb;
    }

    .brand-name {
      font-size: 1rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .brand-tagline {
      font-size: 0.78rem;
      color: var(--text-muted);
    }

    .brand-text {
      display: flex;
      flex-direction: column;
      gap: 0.1rem;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.4rem;
      font-size: 0.86rem;
    }

    .nav-links a {
      color: var(--text-muted);
      position: relative;
      padding-bottom: 2px;
      transition: color 0.18s ease-out, opacity 0.18s ease-out;
    }

    .nav-links a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -3px;
      width: 0;
      height: 2px;
      background: linear-gradient(to right, var(--blue-primary), var(--blue-soft));
      transition: width 0.18s ease-out;
    }

    .nav-links a:hover {
      color: var(--text-soft);
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-ai-btn {
      border-radius: 4px;
      border: 1px solid var(--blue-soft);
      background: #020617;
      color: var(--text-main);
      padding: 0.4rem 0.95rem;
      font-size: 0.82rem;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      transition:
        border-color 0.18s ease-out,
        background 0.18s ease-out,
        transform 0.18s ease-out,
        box-shadow 0.18s ease-out;
    }

    .nav-ai-btn span {
      font-size: 0.92rem;
    }

    .nav-ai-btn:hover {
      border-color: var(--blue-primary);
      background: #020b24;
      transform: translateY(-1px);
      box-shadow: 0 12px 30px rgba(15, 23, 42, 0.9);
    }

    /* Mobile nav toggle */
    .nav-toggle {
      display: none;
      width: 36px;
      height: 36px;
      border-radius: 4px;
      border: 1px solid rgba(148, 163, 184, 0.6);
      background: #020617;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 4px;
      cursor: pointer;
      padding: 0;
    }

    .nav-toggle span {
      height: 2px;
      width: 16px;
      border-radius: 999px;
      background: #e5e7eb;
      transition: transform 0.18s ease-out, opacity 0.18s ease-out;
    }

    .nav-toggle.open span:nth-child(1) {
      transform: translateY(3px) rotate(45deg);
    }
    .nav-toggle.open span:nth-child(2) {
      opacity: 0;
    }
    .nav-toggle.open span:nth-child(3) {
      transform: translateY(-3px) rotate(-45deg);
    }

    @media (max-width: 780px) {
      .nav-toggle {
        display: inline-flex;
      }
      .nav-links {
        position: fixed;
        inset: 56px 1.1rem auto 1.1rem;
        flex-direction: column;
        border-radius: 6px;
        padding: 0.8rem 1rem;
        background: #020617;
        border: 1px solid var(--blue-primary);
        box-shadow: var(--shadow-soft);
        display: none;
      }
      .nav-links.open {
        display: flex;
      }
      .nav-ai-btn {
        width: 100%;
        justify-content: center;
      }
    }

    /* ================================================================
       BUTTONS
    ================================================================ */
    .btn-primary,
    .btn-ghost {
      border-radius: 4px;
      padding: 0.7rem 1.4rem;
      font-size: 0.9rem;
      font-weight: 500;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      border: 1px solid transparent;
      transition:
        background 0.18s ease-out,
        border-color 0.18s ease-out,
        color 0.18s ease-out,
        box-shadow 0.18s ease-out,
        transform 0.18s ease-out;
    }

    .btn-primary {
      background: var(--blue-primary);
      border-color: var(--blue-soft);
      color: #f9fafb;
      box-shadow: 0 14px 30px rgba(17, 17, 132, 0.55);
    }

    .btn-primary:hover {
      background: #161696;
      border-color: #161696;
      transform: translateY(-1px);
      box-shadow: 0 18px 38px rgba(17, 17, 132, 0.7);
    }

    .btn-ghost {
      background: transparent;
      border-color: var(--border-subtle);
      color: var(--text-soft);
    }

    .btn-ghost:hover {
      border-color: var(--blue-primary);
      background: #020b24;
      color: #e5e7eb;
      transform: translateY(-1px);
      box-shadow: 0 10px 26px rgba(15, 23, 42, 0.85);
    }

    /* ================================================================
       SECTION HEADINGS
    ================================================================ */
    .section-label {
      font-size: 0.78rem;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--text-muted);
      margin-bottom: 0.55rem;
    }

    .section-title {
      font-size: 1.35rem;
      font-weight: 600;
      margin-bottom: 0.35rem;
      letter-spacing: -0.02em;
    }

    .section-subtitle {
      font-size: 0.94rem;
      color: var(--text-muted);
      max-width: 40rem;
    }

    .section-divider {
      height: 1px;
      border: 0;
      margin: 0 0 3rem;
      background: linear-gradient(
        to right,
        transparent,
        rgba(148, 163, 184, 0.3),
        transparent
      );
    }

    /* ================================================================
       HERO
    ================================================================ */
    #home {
      position: relative;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.7fr) minmax(0, 1.1fr);
      gap: 2.8rem;
      align-items: center;
      padding-top: 1.4rem;
    }

    @media (max-width: 900px) {
      .hero-grid {
        grid-template-columns: 1fr;
        gap: 2.2rem;
      }
    }

    .hero-kicker {
      font-size: 0.78rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: var(--text-muted);
      margin-bottom: 0.8rem;
    }

    .hero-title {
      font-size: clamp(2.4rem, 3.1vw, 3rem);
      font-weight: 600;
      letter-spacing: -0.05em;
      color: #e5e7eb;
      min-height: 2.8rem;
      margin-bottom: 0.5rem;
    }

    .hero-subtitle {
      font-size: 0.96rem;
      color: var(--text-soft);
      max-width: 36rem;
      line-height: 1.7;
    }

    .hero-stats-row {
      margin-top: 1rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.7rem;
      font-size: 0.8rem;
    }

    .hero-stat {
      border-radius: 4px;
      padding: 0.3rem 0.9rem;
      background: #020818;
      border: 1px solid rgba(17, 17, 132, 0.75);
      color: #cbd5f5;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.9rem;
      margin-top: 1.6rem;
    }

    @media (max-width: 480px) {
      .hero-actions {
        flex-direction: column;
        align-items: flex-start;
      }
      .btn-primary,
      .btn-ghost {
        width: 100%;
        justify-content: center;
      }
    }

    .hero-avatar {
      width: 120px;
      height: 120px;
      border-radius: 6px;
      background:
        url("https://biqadx.com/profile.jpeg") center/cover no-repeat,
        #020617;
      border: 1px solid rgba(148, 163, 184, 0.7);
      margin-bottom: 1rem;
      box-shadow: 0 14px 40px rgba(0, 0, 0, 0.9);
    }

    .hero-name {
      font-size: 1rem;
      font-weight: 500;
      margin-bottom: 0.15rem;
    }

    .hero-role {
      font-size: 0.8rem;
      color: var(--text-muted);
      margin-bottom: 0.85rem;
    }

    .hero-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
      margin-bottom: 0.9rem;
      font-size: 0.75rem;
    }

    .hero-badge {
      padding: 0.22rem 0.7rem;
      border-radius: var(--radius-pill);
      border: 1px solid rgba(148, 163, 184, 0.45);
      background: #020617;
      color: #e5e7eb;
    }

    .hero-note {
      font-size: 0.8rem;
      color: var(--text-muted);
      line-height: 1.6;
    }

    /* Hero metrics strip */
    .hero-metrics {
      margin-top: 2.1rem;
      display: grid;
      gap: 0.9rem;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    .metric-card {
      border-radius: 4px;
      border: 1px solid rgba(17, 17, 132, 0.8);
      background: radial-gradient(circle at top left, rgba(17, 24, 39, 0.8), #020617);
      padding: 0.8rem 0.9rem;
      font-size: 0.8rem;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.8);
    }

    .metric-label {
      color: var(--text-muted);
      margin-bottom: 0.25rem;
    }

    .metric-value {
      font-size: 1.15rem;
      font-weight: 600;
    }

    .metric-sub {
      font-size: 0.7rem;
      color: #9ca3af;
      margin-top: 0.15rem;
    }

    /* ================================================================
       STRENGTHS SECTION
    ================================================================ */
    .strengths-grid {
      margin-top: 2rem;
      display: grid;
      gap: 1.4rem;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    }

    .strength-card {
      background: var(--bg-card);
      border-radius: var(--radius-lg);
      border: 1px solid rgba(17, 17, 132, 0.8);
      padding: 1.1rem 1.15rem 1.1rem;
      box-shadow: var(--shadow-soft);
      font-size: 0.86rem;
      position: relative;
      overflow: hidden;
      transition: 0.2s ease-out;
    }

    .strength-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top left, rgba(17, 17, 132, 0.25), transparent 50%);
      opacity: 0;
      transition: opacity 0.2s ease-out;
      pointer-events: none;
    }

    .strength-card:hover {
      transform: translateY(-2px);
      border-color: var(--blue-primary);
      box-shadow: var(--shadow-strong);
    }

    .strength-card:hover::before {
      opacity: 1;
    }

    .strength-title {
      font-size: 0.96rem;
      font-weight: 600;
      margin-bottom: 0.35rem;
    }

    .strength-text {
      color: #e5e7eb;
      line-height: 1.6;
      margin-bottom: 0.4rem;
    }

    .strength-tag {
      font-size: 0.7rem;
      padding: 0.18rem 0.7rem;
      border-radius: var(--radius-pill);
      border: 1px solid rgba(148, 163, 184, 0.4);
      color: #cbd5f5;
      display: inline-block;
    }

    /* ================================================================
       SKILLS – CARDS & TECH STACK BAND
    ================================================================ */
    .skills-wrap {
      margin-top: 2.1rem;
      display: grid;
      gap: 1.6rem;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    }

    .skill-col {
      background: var(--bg-card);
      border: 1px solid rgba(17, 17, 132, 0.8);
      padding: 1.3rem 1.25rem 1.25rem;
      border-radius: var(--radius-lg);
      transition: 0.18s ease-out;
      box-shadow: var(--shadow-soft);
      position: relative;
      overflow: hidden;
    }

    .skill-col::after {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top right, rgba(17, 17, 132, 0.3), transparent 60%);
      opacity: 0;
      transition: opacity 0.18s ease-out;
      pointer-events: none;
    }

    .skill-col:hover {
      border-color: var(--blue-primary);
      transform: translateY(-2px);
      box-shadow: var(--shadow-strong);
    }

    .skill-col:hover::after {
      opacity: 1;
    }

    .skill-icon {
      width: 32px;
      height: 32px;
      border-radius: 4px;
      border: 1px solid rgba(17, 17, 132, 0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      margin-bottom: 0.8rem;
      background: #020617;
    }

    .skill-header-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.5rem;
      margin-bottom: 0.45rem;
    }

    .skill-heading {
      font-size: 0.98rem;
      font-weight: 600;
    }

    .skill-badge {
      font-size: 0.72rem;
      padding: 0.16rem 0.55rem;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.7);
      color: #bfdbfe;
      background: rgba(15, 23, 42, 0.9);
      white-space: nowrap;
    }

    .skill-sub {
      font-size: 0.8rem;
      color: var(--text-muted);
      margin-bottom: 0.7rem;
    }

    .skill-list {
      list-style: none;
    }

    .skill-list li {
      font-size: 0.86rem;
      color: #e5e7eb;
      margin-bottom: 0.28rem;
      display: flex;
      align-items: center;
      gap: 0.38rem;
    }

    .skill-list li::before {
      content: "•";
      font-size: 0.8rem;
      color: #60a5fa;
    }

    /* Tech stack strip */
    .stack-strip {
      margin-top: 2.2rem;
      border-radius: 6px;
      border: 1px solid rgba(17, 17, 132, 0.8);
      background: linear-gradient(to right, #020617, #020b24);
      padding: 0.85rem 1rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 0.7rem;
      font-size: 0.78rem;
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.9);
    }

    .stack-label {
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: #9ca3af;
      font-size: 0.72rem;
      margin-right: 0.4rem;
    }

    .stack-badge {
      padding: 0.24rem 0.75rem;
      border-radius: var(--radius-pill);
      border: 1px solid rgba(148, 163, 184, 0.5);
      color: #e5e7eb;
      background: #020617;
      white-space: nowrap;
    }

    /* ================================================================
       TIMELINE
    ================================================================ */
    .timeline {
      position: relative;
      margin-top: 2.4rem;
      padding: 0 0 0.4rem;
    }

    .timeline::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      border-radius: 999px;
      background: linear-gradient(
        to bottom,
        rgba(148, 163, 184, 0.1),
        rgba(17, 17, 132, 0.9),
        rgba(148, 163, 184, 0.1)
      );
      opacity: 0.8;
    }

    .timeline-item {
      position: relative;
      width: 100%;
      display: flex;
      margin-bottom: 2.6rem;
    }

    .timeline-item.side-left {
      justify-content: flex-start;
    }

    .timeline-item.side-right {
      justify-content: flex-end;
    }

    .timeline-block {
      width: min(440px, 50%);
      padding: 0.4rem 0;
      font-size: 0.88rem;
    }

    .timeline-node {
      position: absolute;
      left: 50%;
      top: 6px;
      transform: translateX(-50%);
      width: 12px;
      height: 12px;
      border-radius: 999px;
      background: radial-gradient(circle, #93c5fd 0, #111184 55%, #0b0b5c 100%);
      box-shadow: 0 0 14px rgba(17, 17, 132, 0.9);
    }

    .timeline-meta {
      font-size: 0.78rem;
      color: #93c5fd;
      margin-bottom: 0.2rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    .timeline-title {
      font-size: 1rem;
      font-weight: 600;
      color: #e5e7eb;
      margin-bottom: 0.1rem;
    }

    .timeline-place {
      font-size: 0.84rem;
      color: #cbd5e1;
      margin-bottom: 0.55rem;
    }

    .timeline-list {
      padding-left: 1.1rem;
      line-height: 1.6;
      color: #e5e7eb;
    }

    .timeline-list li {
      margin-bottom: 0.25rem;
    }

    .timeline-badge {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: -1rem;
      font-size: 0.7rem;
      padding: 0.18rem 0.75rem;
      background: #020617;
      border: 1px solid rgba(148, 163, 184, 0.4);
      border-radius: 999px;
      color: #cbd5f5;
      backdrop-filter: blur(10px);
    }

    @media (max-width: 860px) {
      .timeline::before {
        left: 10px;
      }
      .timeline-node {
        left: 10px;
        transform: translateX(0);
      }
      .timeline-item {
        justify-content: flex-start;
      }
      .timeline-block {
        width: 100%;
        margin-left: 2.4rem;
      }
      .timeline-badge {
        left: 2.4rem;
        transform: none;
      }
    }

    /* ================================================================
       PROJECTS
    ================================================================ */
    .project-grid {
      margin-top: 2.1rem;
      display: grid;
      gap: 1.7rem;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .project-card {
      background: var(--bg-card);
      border: 1px solid rgba(17, 17, 132, 0.35);
      border-radius: var(--radius-xl);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.18s ease-out, box-shadow 0.18s ease-out, border-color 0.18s ease-out;
      box-shadow: var(--shadow-soft);
    }

    .project-media {
      position: relative;
      overflow: hidden;
      height: 170px;
    }

    .project-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1.02);
      transition: transform 0.35s ease-out;
    }

    .project-card:hover .project-media img {
      transform: scale(1.05);
    }

    .project-card:hover {
      transform: translateY(-2px);
      border-color: var(--blue-primary);
      box-shadow: var(--shadow-strong);
    }

    .project-body {
      padding: 1.2rem 1.25rem 1.35rem;
      font-size: 0.88rem;
      color: var(--text-muted);
    }

    .project-title {
      font-size: 0.98rem;
      font-weight: 600;
      margin-bottom: 0.45rem;
      color: var(--text-soft);
    }

    .project-desc {
      font-size: 0.88rem;
      margin-bottom: 0.9rem;
      color: #e5e7eb;
    }

    .project-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
    }

    .tag {
      padding: 0.22rem 0.82rem;
      font-size: 0.76rem;
      border-radius: var(--radius-pill);
      background: #020617;
      border: 1px solid var(--border-subtle);
      color: var(--text-muted);
    }

    /* ================================================================
       CONTACT
    ================================================================ */
    .contact-layout {
      margin-top: 1.9rem;
      display: grid;
      grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
      gap: 1.9rem;
      align-items: flex-start;
    }

    @media (max-width: 780px) {
      .contact-layout {
        grid-template-columns: 1fr;
      }
    }

    .contact-text {
      font-size: 0.9rem;
      color: var(--text-muted);
      line-height: 1.7;
    }

    .chip-row {
      margin-top: 0.9rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.55rem;
      font-size: 0.82rem;
    }

    .chip {
      padding: 0.3rem 0.95rem;
      border-radius: var(--radius-pill);
      border: 1px solid rgba(17, 17, 132, 0.35);
      background: #020617;
      color: var(--text-muted);
      cursor: default;
      transition: border-color 0.18s ease-out, background 0.18s ease-out, color 0.18s ease-out, transform 0.18s ease-out;
    }

    .chip[href] {
      cursor: pointer;
    }

    .chip[href]:hover {
      border-color: var(--blue-primary);
      color: var(--text-soft);
      background: #020b24;
      transform: translateY(-1px);
    }

    form {
      background: #020818;
      border-radius: var(--radius-lg);
      border: 1px solid rgba(17, 17, 132, 0.35);
      padding: 1.2rem 1.15rem 1.35rem;
      display: grid;
      gap: 0.75rem;
      font-size: 0.86rem;
      box-shadow: var(--shadow-strong);
    }

    input,
    textarea {
      width: 100%;
      border-radius: var(--radius-md);
      border: 1px solid rgba(15, 23, 42, 0.95);
      background: #020617;
      color: var(--text-main);
      padding: 0.6rem 0.75rem;
      font-size: 0.86rem;
      outline: none;
      resize: vertical;
    }

    input::placeholder,
    textarea::placeholder {
      color: #6b7280;
    }

    input:focus,
    textarea:focus {
      border-color: rgba(17, 17, 132, 0.9);
      box-shadow: 0 0 0 1px rgba(17, 17, 132, 0.5);
      background: #020b24;
    }

    .btn-submit {
      justify-self: flex-start;
      margin-top: 0.2rem;
    }

    /* ================================================================
       FOOTER
    ================================================================ */
    footer {
      border-top: 1px solid var(--blue-primary);
      padding: 1.1rem 1.6rem 1.3rem;
      font-size: 0.8rem;
      color: var(--text-muted);
      text-align: center;
      background: #020617;
    }

    /* ================================================================
       AI ASSISTANT MODAL
    ================================================================ */
    .ai-overlay {
      position: fixed;
      inset: 0;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 1.4rem;
      background: rgba(2, 6, 23, 0.92);
      backdrop-filter: blur(18px);
      z-index: 120;
    }

    .ai-shell {
      width: 100%;
      max-width: 840px;
      height: min(500px, 90vh);
      background: #020818;
      border-radius: var(--radius-xl);
      border: 1px solid rgba(17, 17, 132, 0.7);
      display: flex;
      flex-direction: column;
      box-shadow: 0 40px 120px rgba(0, 0, 0, 1);
      overflow: hidden;
    }

    .ai-header {
      padding: 0.9rem 1.1rem;
      border-bottom: 1px solid rgba(17, 17, 132, 0.8);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.8rem;
      background: #020617;
    }

    .ai-header-left {
      display: flex;
      align-items: center;
      gap: 0.7rem;
    }

    .ai-icon {
      width: 30px;
      height: 30px;
      border-radius: 4px;
      background: #020617;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.05rem;
      border: 1px solid rgba(17, 17, 132, 0.9);
      box-shadow: 0 0 14px rgba(17, 17, 132, 0.7);
    }

    .ai-title {
      font-size: 0.92rem;
      font-weight: 500;
    }

    .ai-subtitle {
      font-size: 0.78rem;
      color: var(--text-muted);
    }

    .ai-body {
      flex: 1;
      display: grid;
      grid-template-columns: minmax(0, 1.7fr) minmax(0, 1fr);
      min-height: 0;
    }

    .ai-chat {
      padding: 0.9rem 1.1rem;
      display: flex;
      flex-direction: column;
      border-right: 1px solid rgba(15, 23, 42, 0.95);
      min-height: 0;
    }

    .ai-messages {
      flex: 1;
      overflow-y: auto;
      padding-right: 0.35rem;
      font-size: 0.84rem;
      margin-bottom: 0.6rem;
    }

    .ai-msg {
      margin-bottom: 0.6rem;
      display: flex;
    }

    .ai-msg.assistant {
      justify-content: flex-start;
    }

    .ai-msg.user {
      justify-content: flex-end;
    }

    .ai-bubble {
      max-width: 88%;
      padding: 0.6rem 0.8rem;
      border-radius: 8px;
      line-height: 1.5;
      white-space: pre-wrap;
      font-size: 0.83rem;
    }

    .ai-msg.assistant .ai-bubble {
      background: #020818;
      border: 1px solid rgba(17, 17, 132, 0.7);
      color: var(--text-main);
    }

    .ai-msg.user .ai-bubble {
      background: linear-gradient(to right, var(--blue-primary), #161696);
      border: 1px solid rgba(17, 17, 132, 0.9);
      color: #f9fafb;
      box-shadow: 0 10px 30px rgba(17, 17, 132, 0.6);
    }

    .ai-input-row {
      display: flex;
      align-items: center;
      gap: 0.45rem;
    }

    .ai-input {
      flex: 1;
      border-radius: var(--radius-pill);
      border: 1px solid rgba(15, 23, 42, 0.95);
      background: #020617;
      color: var(--text-main);
      font-size: 0.8rem;
      padding: 0.5rem 0.78rem;
      outline: none;
    }

    .ai-input::placeholder {
      color: #6b7280;
    }

    .ai-input:focus {
      border-color: rgba(17, 17, 132, 0.9);
      box-shadow: 0 0 0 1px rgba(17, 17, 132, 0.5);
    }

    .ai-right-pane {
      padding: 0.9rem 1.1rem;
      font-size: 0.8rem;
      color: var(--text-muted);
      display: flex;
      flex-direction: column;
      gap: 0.7rem;
      background: #020a1f;
      border-left: 1px solid rgba(15, 23, 42, 0.95);
    }

    .ai-right-title {
      font-size: 0.86rem;
      font-weight: 500;
      color: var(--text-main);
      margin-bottom: 0.15rem;
    }

    .ai-typing {
      font-size: 0.78rem;
      color: var(--text-muted);
      margin-bottom: 0.4rem;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
    }

    .ai-typing-dots {
      display: inline-flex;
      gap: 3px;
    }

    .ai-typing-dots span {
      width: 4px;
      height: 4px;
      border-radius: 999px;
      background: #9ca3af;
      animation: typingDots 1s infinite ease-in-out;
    }

    .ai-typing-dots span:nth-child(2) {
      animation-delay: 0.16s;
    }
    .ai-typing-dots span:nth-child(3) {
      animation-delay: 0.32s;
    }

    @keyframes typingDots {
      0%, 60%, 100% { transform: translateY(0); opacity: 0.6; }
      30% { transform: translateY(-2px); opacity: 1; }
    }

    .ai-suggest-row {
      margin-top: 0.5rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.45rem;
    }

    .ai-suggest-btn {
      border-radius: var(--radius-pill);
      border: 1px solid rgba(148, 163, 184, 0.4);
      background: #020617;
      font-size: 0.76rem;
      padding: 0.25rem 0.7rem;
      color: var(--text-muted);
      cursor: pointer;
      transition: 0.18s ease-out;
    }

    .ai-suggest-btn:hover {
      border-color: var(--blue-primary);
      color: var(--text-soft);
      transform: translateY(-1px);
    }

    .ai-chip-row button.chip {
      background: #020617;
    }

    @media (max-width: 780px) {
      .ai-body {
        grid-template-columns: 1fr;
      }
      .ai-chat {
        border-right: none;
        border-bottom: 1px solid rgba(15, 23, 42, 0.95);
      }
      .ai-right-pane {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- ================================================================
       HEADER
  ================================================================ -->
  <header>
    <div class="nav-inner">
      <div class="brand-block">
        <div class="brand-mark">DK</div>
        <div class="brand-text">
          <div class="brand-name">DILRANJAN</div>
          <div class="brand-tagline">AI/ML & Automation Engineer</div>
        </div>
      </div>

      <button class="nav-toggle" id="navToggle" type="button" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="nav-links">
        <a href="#home">Home</a>
        <a href="#strengths">Strengths</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#education">Education</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
        <button class="nav-ai-btn" id="navAiTrigger" type="button">
          <span>🤖</span> Ask AI
        </button>
      </nav>
    </div>
  </header>

  <!-- ================================================================
       PAGE FRAME
  ================================================================ -->
  <div class="">
    <div class="page-frame">
      <main>
        <!-- HERO -->
        <section id="home">
          <div class="hero-grid">
            <!-- LEFT -->
            <div>
              <div class="hero-kicker">AI · ML · Automation</div>
              <h1 class="hero-title" id="typedText"></h1>
              <p class="hero-subtitle">
                I build AI-powered automation systems and LLM-based tools that cut manual work, speed up decisions,
                and make everyday operations more reliable.
              </p>

              <div class="hero-stats-row">
                <div class="hero-stat">2+ years in development & automation</div>
                <div class="hero-stat">AI/ML, workflows, backend APIs</div>
                <div class="hero-stat">Open to remote & hybrid roles</div>
              </div>

              <div class="hero-actions">
                <a
                  href="https://drive.google.com/file/d/1urmG6tqoHW4_s4u73qjarlSQtWnkPTND/view?usp=drive_link"
                  target="_blank"
                  class="btn-primary"
                  id="downloadResumeBtn"
                >
                  Download Resume
                </a>

                <button class="btn-ghost" type="button" id="heroAiTrigger">
                  Talk to Portfolio AI
                </button>
              </div>

              <!-- Metrics strip -->
              <div class="hero-metrics">
                <div class="metric-card">
                  <div class="metric-label">Automation impact</div>
                  <div class="metric-value">50–70%</div>
                  <div class="metric-sub">Typical reduction in manual routine work</div>
                </div>
                <div class="metric-card">
                  <div class="metric-label">Systems built</div>
                  <div class="metric-value">10+</div>
                  <div class="metric-sub">Production workflows & internal tools</div>
                </div>
                <div class="metric-card">
                  <div class="metric-label">Focus</div>
                  <div class="metric-value">AI + Ops</div>
                  <div class="metric-sub">LLMs, ML, backend & automation stack</div>
                </div>
              </div>
            </div>

            <!-- RIGHT: Profile card -->
            <aside>
              <div class="hero-avatar"></div>
              <div class="hero-name">Dilranjan</div>
              <div class="hero-role">AI/ML & Automation Engineer · New Delhi, India</div>

              <div class="hero-badges">
                <span class="hero-badge">Python · JavaScript</span>
                <span class="hero-badge">FastAPI · Flask</span>
                <span class="hero-badge">LLMs · LangChain</span>
                <span class="hero-badge">Automation Workflows</span>
              </div>

              <div class="hero-note">
                Currently working as an Automation Developer at Zenith Auto Industries, building Python-based workflows,
                messaging automation and AI-assisted tools that reduce process time and manual effort across teams.
              </div>
            </aside>
          </div>
        </section>

        <hr class="section-divider" />

        <!-- STRENGTHS -->
        <section id="strengths">
          <div class="section-label">Strengths</div>
          <h2 class="section-title">How I work and add value.</h2>
          <p class="section-subtitle">
            Beyond tools and code, this is how I approach automation, ML and LLM projects with real business constraints.
          </p>

          <div class="strengths-grid">
            <div class="strength-card">
              <div class="strength-title">Problem-first, tool-second</div>
              <p class="strength-text">
                I start from the workflow pain — where teams lose time or consistency — and then design the simplest
                AI or automation solution that delivers clear, measurable impact.
              </p>
              <span class="strength-tag">Business-aligned automation</span>
            </div>

            <div class="strength-card">
              <div class="strength-title">Reliable systems, not quick hacks</div>
              <p class="strength-text">
                My automations include logging, monitoring and fallbacks so that messaging, payments and internal
                operations stay stable even as volume grows.
              </p>
              <span class="strength-tag">Reliability & scalability</span>
            </div>

            <div class="strength-card">
              <div class="strength-title">Ownership with clear communication</div>
              <p class="strength-text">
                I work end-to-end — from idea to deployed workflow — and keep stakeholders updated with simple,
                non-technical explanations and clear metrics.
              </p>
              <span class="strength-tag">Team collaboration</span>
            </div>
          </div>
        </section>

        <hr class="section-divider" />

        <!-- SKILLS -->
        <section id="skills">
          <div class="section-label">Skills</div>
          <h2 class="section-title">Core technical capabilities.</h2>
          <p class="section-subtitle">
            A focused blend of AI/ML, Python automation and backend engineering, used in real production work.
          </p>

          <div class="skills-wrap">
            <div class="skill-col">
              <div class="skill-icon">🧠</div>
              <div class="skill-header-row">
                <h3 class="skill-heading">AI / ML</h3>
                <span class="skill-badge">Generative AI</span>
              </div>
              <p class="skill-sub">Applied machine learning and LLMs for real workflows.</p>
              <ul class="skill-list">
                <li>LLMs with OpenAI API, Hugging Face & LangChain</li>
                <li>ML using scikit-learn, TensorFlow, PyTorch, XGBoost</li>
                <li>NLP, prompt engineering and basic RAG patterns</li>
                <li>Data handling with Pandas, NumPy & Matplotlib</li>
              </ul>
            </div>

            <div class="skill-col">
              <div class="skill-icon">⚙️</div>
              <div class="skill-header-row">
                <h3 class="skill-heading">Automation Engineering</h3>
                <span class="skill-badge">Workflows</span>
              </div>
              <p class="skill-sub">Communication and business process automation.</p>
              <ul class="skill-list">
                <li>Python automation for quotations, orders & follow-ups</li>
                <li>WhatsApp, Gmail, SMS & REST API based workflows</li>
                <li>Browser automation and scraping with Selenium</li>
                <li>Scheduling, logging and basic monitoring setup</li>
              </ul>
            </div>

            <div class="skill-col">
              <div class="skill-icon">💻</div>
              <div class="skill-header-row">
                <h3 class="skill-heading">Backend</h3>
                <span class="skill-badge">APIs</span>
              </div>
              <p class="skill-sub">APIs and services powering AI and automation.</p>
              <ul class="skill-list">
                <li>FastAPI & Flask microservices</li>
                <li>REST API design & third-party integrations</li>
                <li>SQL & MySQL queries and data modelling basics</li>
                <li>Authentication, validation & error handling</li>
              </ul>
            </div>

            <div class="skill-col">
              <div class="skill-icon">🛠️</div>
              <div class="skill-header-row">
                <h3 class="skill-heading">Tools & Infra</h3>
                <span class="skill-badge">Shipping</span>
              </div>
              <p class="skill-sub">Everything needed to ship and maintain code.</p>
              <ul class="skill-list">
                <li>Git, GitHub and CI/CD pipelines</li>
                <li>Docker & container-based setups</li>
                <li>Excel & Google Sheets for reports/automation</li>
                <li>Documentation & basic UI with Canva when needed</li>
              </ul>
            </div>
          </div>

          <!-- Tech stack band -->
          <div class="stack-strip">
            <span class="stack-label">Tech stack</span>
            <span class="stack-badge">Python</span>
            <span class="stack-badge">SQL</span>
            <span class="stack-badge">MySQL</span>
            <span class="stack-badge">JavaScript</span>
            <span class="stack-badge">Pandas</span>
            <span class="stack-badge">NumPy</span>
            <span class="stack-badge">Matplotlib</span>
            <span class="stack-badge">scikit-learn</span>
            <span class="stack-badge">TensorFlow</span>
            <span class="stack-badge">PyTorch</span>
            <span class="stack-badge">XGBoost</span>
            <span class="stack-badge">NLP</span>
            <span class="stack-badge">LLMs</span>
            <span class="stack-badge">LangChain</span>
            <span class="stack-badge">Hugging Face</span>
            <span class="stack-badge">OpenAI API</span>
            <span class="stack-badge">FastAPI</span>
            <span class="stack-badge">Flask</span>
            <span class="stack-badge">REST APIs</span>
            <span class="stack-badge">Selenium</span>
            <span class="stack-badge">Git</span>
            <span class="stack-badge">GitHub</span>
            <span class="stack-badge">Docker</span>
            <span class="stack-badge">CI/CD</span>
            <span class="stack-badge">Excel</span>
            <span class="stack-badge">Google Sheets</span>
          </div>
        </section>

        <hr class="section-divider" />

        <!-- EXPERIENCE – TIMELINE -->
        <section id="experience">
          <div class="section-label">Experience</div>
          <h2 class="section-title">Professional journey.</h2>
          <p class="section-subtitle">
            Experience across AI/ML-driven automation, internal tools and full-stack web applications.
          </p>

          <div class="timeline">
            <div class="timeline-badge">Work</div>

            <div class="timeline-item side-left">
              <div class="timeline-node"></div>
              <div class="timeline-block">
                <div class="timeline-meta">Mar 2024 – Present · New Delhi</div>
                <div class="timeline-title">Automation Developer</div>
                <div class="timeline-place">Zenith Auto Industries Pvt Ltd</div>
                <ul class="timeline-list">
                  <li>Implemented automation for quotations, orders, follow-ups and payments, cutting process time by ~50%.</li>
                  <li>Integrated Python workflows with WhatsApp, Gmail, SMS and REST APIs, reducing manual work by ~70%.</li>
                  <li>Guided a three-member team delivering scalable automation tools with consistent performance and reliability.</li>
                </ul>
              </div>
            </div>

            <div class="timeline-item side-right">
              <div class="timeline-node"></div>
              <div class="timeline-block">
                <div class="timeline-meta">Aug 2023 – Mar 2024 · New Delhi</div>
                <div class="timeline-title">Full Stack Developer</div>
                <div class="timeline-place">Iwebs Technology</div>
                <ul class="timeline-list">
                  <li>Developed full-stack modules using PHP, JavaScript, HTML, CSS and REST APIs to meet product requirements.</li>
                  <li>Improved UI performance and backend efficiency to enhance load times, responsiveness and deployment stability.</li>
                  <li>Collaborated with engineering, product and QA teams to deliver reliable, production-ready features.</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <hr class="section-divider" />

        <!-- EDUCATION – TIMELINE -->
        <section id="education">
          <div class="section-label">Education & Certifications</div>
          <h2 class="section-title">Foundations.</h2>
          <p class="section-subtitle">
            Formal education and certifications that support my AI/ML and software engineering work.
          </p>

          <div class="timeline">
            <div class="timeline-badge">Education</div>

            <div class="timeline-item side-right">
              <div class="timeline-node"></div>
              <div class="timeline-block">
                <div class="timeline-meta">2020 – 2023 · Punjab, India</div>
                <div class="timeline-title">Bachelor of Computer Application</div>
                <div class="timeline-place">Lovely Professional University</div>
                <ul class="timeline-list">
                  <li>Graduated in the top 10% of the batch.</li>
                  <li>Coursework: DSA, DBMS, Web Development, Data Science & Machine Learning.</li>
                </ul>
              </div>
            </div>

            <div class="timeline-item side-left">
              <div class="timeline-node"></div>
              <div class="timeline-block">
                <div class="timeline-meta">Certifications</div>
                <div class="timeline-title">AI, ML & Foundations</div>
                <div class="timeline-place">Oracle University · Internshala</div>
                <ul class="timeline-list">
                  <li>Oracle Certified Foundations Associate – Oracle University.</li>
                  <li>Machine Learning with AI Training – Internshala (Top Performer, Scored 98%).</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <hr class="section-divider" />

        <!-- PROJECTS -->
        <section id="projects">
          <div class="section-label">Projects</div>
          <h2 class="section-title">Selected work.</h2>
          <p class="section-subtitle">
            AI and automation projects focused on real-world workflows, safety and measurable outcomes.
          </p>

          <div class="project-grid">
            <article class="project-card">
              <div class="project-media">
                <img
                  src="Assets/sarthi.png"
                  alt="Bilingual AI personal assistant interface"
                />
              </div>
              <div class="project-body">
                <h3 class="project-title">Sarthi –  Personal Assistant</h3>
                <p class="project-desc">
                  Hindi/English desktop assistant that supports voice commands, task automation, contextual
                  conversations, reminders and real-time responses using Python, PyQt6, speech recognition, APIs and
                  object detection.
                </p>
                <div class="project-tags">
                  <span class="tag">Python</span>
                  <span class="tag">PyQt6</span>
                  <span class="tag">Speech recognition</span>
                  <span class="tag">Object detection</span>
                  <span class="tag">Automation</span>
                  <span class="tag">Assistant</span>
                </div>
              </div>
            </article>

            <article class="project-card">
              <div class="project-media">
                <img
                  src="Assets/urldetector.jpeg"
                  alt="Phishing URL detection and security dashboard"
                />
              </div>
              <div class="project-body">
                <h3 class="project-title">Phishing URL Detector</h3>
                <p class="project-desc">
                  ML-powered URL analysis tool that flags risky or fraudulent links using a classification model
                  combined with rule-based checks, with a simple web interface for instant safety evaluation.
                </p>
                <div class="project-tags">
                  <span class="tag">Python</span>
                  <span class="tag">Machine Learning</span>
                  <span class="tag">Classification</span>
                  <span class="tag">Security</span>
                  <span class="tag">Web app</span>
                  <span class="tag">URL analysis</span>
                </div>
              </div>
            </article>


          </div>
        </section>

        <hr class="section-divider" />

        <!-- CONTACT -->
        <section id="contact">
          <div class="section-label">Contact</div>
          <h2 class="section-title">Let’s talk.</h2>
          <p class="section-subtitle">
            Open to AI/ML Engineer and Automation Engineer roles, plus projects where automation and LLMs have a clear impact.
          </p>

          <div class="contact-layout">
            <div class="contact-text">
              <p>
                I’m based in New Delhi, India, and interested in roles where AI and automation solve concrete problems —
                not just prototypes — especially around workflows, communication and decision support.
              </p>

              <div class="chip-row">
                <span class="chip">📧 dilranjan.connect@gmail.com</span>
                <span class="chip">📍 New Delhi, India</span>
              </div>

              <div class="chip-row" style="margin-top:0.65rem;">
                <a class="chip" href="https://github.com/" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="chip" href="https://linkedin.com/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
              </div>
            </div>

            <form onsubmit="event.preventDefault(); alert('Connect this form to your email or backend service.');">
              <input type="text" placeholder="Your name" required />
              <input type="email" placeholder="Email" required />
              <textarea rows="4" placeholder="Message or context"></textarea>
              <button class="btn-primary btn-submit" type="submit">Send message</button>
            </form>
          </div>
        </section>
      </main>

      <!-- FOOTER INSIDE FRAME -->
      <footer>
        © <span id="year"></span> Dilranjan. All rights reserved.
      </footer>
    </div>
  </div>

  <!-- ================================================================
       AI Assistant Modal
  ================================================================ -->
  <div class="ai-overlay" id="aiOverlay">
    <div class="ai-shell">
      <div class="ai-header">
        <div class="ai-header-left">
          <div class="ai-icon">🤖</div>
          <div>
            <div class="ai-title">AI Portfolio Assistant</div>
            <div class="ai-subtitle">Ask about skills, experience, projects or role fit.</div>
          </div>
        </div>
        <button class="btn-ghost" id="aiCloseBtn" type="button" style="padding:0.35rem 0.9rem;font-size:0.78rem;">
          Close
        </button>
      </div>

      <div class="ai-body">
        <div class="ai-chat">
          <div class="ai-messages" id="aiMessages">
            <div class="ai-msg assistant">
              <div class="ai-bubble">
Hi, I’m an AI assistant for this portfolio.

You can ask things like:
• What experience does Dilranjan have?
• What are his key skills?
• Tell me about his projects.
• Why is he a good fit for an AI/ML role?
              </div>
            </div>
          </div>

          <div class="ai-input-row">
            <input
              type="text"
              class="ai-input"
              id="aiInput"
              placeholder="Ask something about Dilranjan..."
            />
            <button class="btn-primary" id="aiSendBtn" type="button" style="padding:0.46rem 0.95rem;font-size:0.8rem;">
              Send
            </button>
          </div>

          <div class="ai-suggest-row">
            <button class="ai-suggest-btn" data-q="What are Dilranjan's core skills?">Core skills</button>
            <button class="ai-suggest-btn" data-q="Tell me about his experience.">Experience</button>
            <button class="ai-suggest-btn" data-q="What projects has he worked on?">Projects</button>
            <button class="ai-suggest-btn" data-q="Why is he a good fit for AI/ML roles?">AI/ML fit</button>
          </div>
        </div>

        <aside class="ai-right-pane">
          <div class="ai-right-title">
            Quick summaries
          </div>
          <p>Get a quick overview in one click.</p>
          <div class="ai-chip-row" style="margin-top:0.6rem;display:flex;flex-wrap:wrap;gap:0.45rem;">
            <button class="chip" data-summary="general">General</button>
            <button class="chip" data-summary="skills">Skills</button>
            <button class="chip" data-summary="exp">Experience</button>
            <button class="chip" data-summary="projects">Projects</button>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <!-- ================================================================
       JS
  ================================================================ -->
  <script>
    // Dynamic year
    document.getElementById("year").textContent = new Date().getFullYear();

    // Mobile nav toggle
    const navToggle = document.getElementById("navToggle");
    const navLinks = document.querySelector(".nav-links");

    navToggle.addEventListener("click", () => {
      const isOpen = navLinks.classList.toggle("open");
      navToggle.classList.toggle("open", isOpen);
    });

    navLinks.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        if (navLinks.classList.contains("open")) {
          navLinks.classList.remove("open");
          navToggle.classList.remove("open");
        }
      });
    });

    // Typing Effect for Hero Title
    const titles = ["AI/ML Engineer", "Automation Developer", "Full Stack Developer"];
    let tIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function typeLoop() {
      const el = document.getElementById("typedText");
      if (!el) return;

      const current = titles[tIndex];

      if (!deleting) {
        el.textContent = current.substring(0, charIndex++);
        if (charIndex === current.length + 1) {
          deleting = true;
          setTimeout(typeLoop, 900);
          return;
        }
      } else {
        el.textContent = current.substring(0, charIndex--);
        if (charIndex === 0) {
          deleting = false;
          tIndex = (tIndex + 1) % titles.length;
        }
      }

      setTimeout(typeLoop, deleting ? 55 : 90);
    }
    typeLoop();

    // Section reveal on scroll
    const sections = document.querySelectorAll("main section");
    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.18 }
    );
    sections.forEach(sec => observer.observe(sec));

    // AI Assistant Logic (simple KB)
    const knowledgeBase = {
      general:
        "Dilranjan is an AI/ML and Generative AI-focused Automation Engineer based in New Delhi. He builds Python automation, LLM applications and backend systems that reduce manual work and improve operational decision-making.",
      skills:
        "Core skills: Python, SQL, MySQL, JavaScript, Pandas, NumPy, Matplotlib, scikit-learn, TensorFlow, PyTorch, XGBoost, NLP, LLMs, Hugging Face, LangChain, OpenAI API, FastAPI, Flask, REST APIs, Selenium, Git, GitHub, Docker, CI/CD, Excel and Google Sheets.",
      exp:
        "Experience: Automation Developer at Zenith Auto Industries Pvt Ltd (Mar 2024 – Present), where he automated quotations, orders, follow-ups and payments using Python, messaging APIs and REST integrations; and Full Stack Developer at Iwebs Technology (Aug 2023 – Mar 2024), where he delivered full-stack modules using PHP, JavaScript, HTML, CSS and REST APIs.",
      projects:
        "Key projects: Sarthi – a bilingual (Hindi/English) personal assistant built with Python, PyQt6, speech recognition, APIs and object detection; and a Phishing URL Detector that uses a machine learning model plus rule-based checks to flag risky links through a web interface."
    };

    function baseAnswer(q) {
      const text = q.toLowerCase();
      if (text.includes("skill") || text.includes("stack") || text.includes("tech")) {
        return knowledgeBase.skills;
      }
      if (text.includes("experience") || text.includes("work") || text.includes("company") || text.includes("role")) {
        return knowledgeBase.exp;
      }
      if (text.includes("project") || text.includes("portfolio")) {
        return knowledgeBase.projects;
      }
      if (text.includes("contact") || text.includes("email") || text.includes("reach")) {
        return "You can reach him at: dilranjan.connect@gmail.com · Based in New Delhi, India.";
      }
      if (text.includes("fit") || text.includes("why") || text.includes("hire") || text.includes("good for ai")) {
        return "Dilranjan combines hands-on Python automation (quotations, orders, follow-ups and messaging flows) with applied ML and LLM tooling. He has shipped production workflows with clear impact (50–70% reduction in manual work), plus experience in backend APIs and full-stack development, making him a strong fit for AI/ML and automation engineer roles.";
      }
      return knowledgeBase.general + "\n\nYou can also ask about skills, experience or projects.";
    }

    function appendMessage(role, text) {
      const aiMessages = document.getElementById("aiMessages");
      const msg = document.createElement("div");
      msg.className = "ai-msg " + role;
      const bubble = document.createElement("div");
      bubble.className = "ai-bubble";
      bubble.textContent = text;
      msg.appendChild(bubble);
      aiMessages.appendChild(msg);
      aiMessages.scrollTop = aiMessages.scrollHeight;
    }

    const aiOverlay = document.getElementById("aiOverlay");
    const aiCloseBtn = document.getElementById("aiCloseBtn");
    const navAiTrigger = document.getElementById("navAiTrigger");
    const heroAiTrigger = document.getElementById("heroAiTrigger");
    const aiInput = document.getElementById("aiInput");
    const aiSendBtn = document.getElementById("aiSendBtn");

    function openAiOverlay() {
      aiOverlay.style.display = "flex";
      aiInput.focus();
    }

    function closeAiOverlay() {
      aiOverlay.style.display = "none";
    }

    navAiTrigger.addEventListener("click", openAiOverlay);
    heroAiTrigger.addEventListener("click", openAiOverlay);
    aiCloseBtn.addEventListener("click", closeAiOverlay);
    aiOverlay.addEventListener("click", e => {
      if (e.target === aiOverlay) closeAiOverlay();
    });

    function showTyping() {
      const box = document.getElementById("aiMessages");
      const typingEl = document.createElement("div");
      typingEl.className = "ai-typing";
      typingEl.innerHTML = `AI is thinking<span class="ai-typing-dots"><span></span><span></span><span></span></span>`;
      box.appendChild(typingEl);
      box.scrollTop = box.scrollHeight;
      return typingEl;
    }

    function processQuestion(questionText) {
      const question = (questionText ?? aiInput.value).trim();
      if (!question) return;
      aiInput.value = "";
      appendMessage("user", question);

      const typingEl = showTyping();

      setTimeout(() => {
        typingEl.remove();
        const answer = baseAnswer(question);
        appendMessage("assistant", answer);
      }, 400);
    }

    aiSendBtn.addEventListener("click", () => processQuestion());
    aiInput.addEventListener("keydown", e => {
      if (e.key === "Enter") {
        e.preventDefault();
        processQuestion();
      }
    });

    // Quick summary chips
    document.querySelectorAll(".chip[data-summary]").forEach(btn => {
      btn.addEventListener("click", () => {
        const key = btn.dataset.summary;
        appendMessage("assistant", knowledgeBase[key]);
      });
    });

    // Suggested question buttons
    document.querySelectorAll(".ai-suggest-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        const q = btn.dataset.q;
        processQuestion(q);
      });
    });
  </script>
</body>
</html>
