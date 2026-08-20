# JIG CLAMPS — Official Website & Interactive AI Platform

JIG CLAMPS is a premium, technology-driven manufacturer of high-performance Skid Steer Loader attachments built for infrastructure, construction, agriculture, and recycling sectors. This project represents the company's official responsive website, featuring interactive client workflows, product specifications, catalog downloads, and an integrated AI assistant.

---

## 🎨 Design System & UI/UX Overview

The website is designed around an **Ultra-Premium Industrial & Brutalist Aesthetic**:
* **Color Palette**:
  - **Brand Gold/Yellow (`#f4c400`)**: Symbolizes heavy industrial machinery, safety markers, and robust engineering.
  - **Brand Black & Dark (`#000000` / `#111111`)**: Delivers contrast, authority, and high-impact visual structures.
  - **Teal & Blue Accents (`#469b8d` / `#0b3b78`)**: Provides modern professional highlights for data, diagrams, and panels.
* **Typography**: Driven by the modern **Inter** font family (weights `300` to `900`). Bold headings feature a heavy `900` weight (`.fw-black`) to reflect raw engineering strength.
* **Brutalist Accents**: Buttons, inputs, and section layouts utilize sharp 90-degree square edges (`border-radius: 0;`), steering clear of soft rounded corners to align with structural durability.
* **Responsive Interactions**: 
  - Smooth scroll reveal animations powered by the vanilla JS **Intersection Observer API**.
  - A custom full-screen overlay mobile menu structure replacing standard Bootstrap dropdowns.
  - Translucent fixed navigation header with blur filters on scroll.
  - An interactive, slide-out **AI Chatbot Widget** floating at the bottom right for instant visitor Q&A.

---

## 📂 Project Structure

```bash
Jig-Clamps/
├── assets/                 # Brand logos, product renders, and layout diagrams
│   └── docs/               # Technical leaflets, product flyers, and magazine PDFs
├── css/
│   └── style.css           # Custom stylesheets and layout styles
├── js/
│   └── main.js            # Front-end interactions, reveals, and chatbot interface
├── includes/
│   ├── header.php          # Meta tags, navigation menu, and mobile overlays
│   ├── footer.php          # Bottom details, footer links, and Chatbot HTML structure
│   └── quote-cta.php       # Call-to-action layout for quick quotations
├── index.php               # Home page (The JIG Advantage, statistics, catalogs)
├── about.php               # Company profile, values, infrastructure, and press releases
├── process.php             # Core competence stages (Needs, Analysis, Shipment)
├── products.php            # Product portfolio with PDF specs
├── contact.php             # Lead generation and contact inquiry form
├── chatbot-api.php         # Secure cURL middleware for Groq LLM queries
├── .gitignore              # Project build ignore rules
└── README.md               # Project documentation
```

---

## 🛠️ Technology Stack

* **Front-End**: HTML5, CSS3 (Custom Grid/Flex system), Vanilla JavaScript (ES6+), Bootstrap 5.3.3
* **Back-End**: PHP 8.x
* **AI Integration**: Groq API (`llama-3.1-8b-instant` model) via cURL

---

## ⚙️ Setup & Deployment

### Prerequisites
* A local PHP web server like **WampServer**, **XAMPP**, or **MAMP**.
* PHP version `7.4` or higher (`8.x` recommended) with the `curl` extension enabled.

### Installation
1. Clone or download the repository into your server root (e.g., `C:\wamp64\www\Jig-Clamps`).
2. Open [chatbot-api.php](file:///c:/wamp64/www/Jig-Clamps/chatbot-api.php) and verify the `GROQ_API_KEY` configuration constant if you need to update or test chatbot integrations:
   ```php
   define('GROQ_API_KEY', 'your-api-key-here');
   ```
3. Start your local server and navigate to:
   ```text
   http://localhost/Jig-Clamps/
   ```

---

## 🤖 AI Chatbot Setup

The floating chat widget connects visitors directly to a customized customer support agent trained on the JIG CLAMPS product line.
* It uses a system prompt optimized for construction managers, procurement officers, and farmers.
* The API endpoints handle CORS, validate inputs, and feed message logs directly to the Groq API securely.