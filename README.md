# Aspira National Open House Redesign

High-fidelity coded prototype for the Aspira National Open House Spring 2026 landing page case study.

This submission includes a static prototype for quick review and a WordPress-ready template structure to reflect the Full Stack Website Specialist role's focus on WordPress, CMS workflows, semantic HTML, publishing quality assurance, and marketing-led website improvements.

## What This Includes

- Responsive static landing page built with HTML, CSS, and JavaScript
- Aspira logo and official Open House campaign imagery from the supplied task files
- RSVP form area in the first viewport
- Event date and time details from the current landing page
- Location search preview to reduce RSVP friction
- Consent language and reCAPTCHA production note inspired by the live HubSpot form
- Design notes explaining UX and conversion decisions
- WordPress-ready template folder showing how the page could be adapted into a theme/template workflow

## Case Study Goal

The current live page communicates the event, but the RSVP path can be stronger. This redesign focuses on making the value of attending clear before asking users to submit the form, while keeping the most important event information easy to scan.

## Key Decisions

- Placed the RSVP form in the hero so visitors can act immediately.
- Reframed the page around the visitor need: seeing the residence, meeting the team, and picturing daily life at Aspira.
- Split event timing into clear cards:
  - Friday, May 29 and Saturday, May 30, 1pm-4pm at all Aspira Retirement Residences
  - Sunday, May 31 and Monday, June 1, 1pm-4pm at Aspira Kensington Place
- Added a phone CTA for visitors who prefer to speak with someone.
- Added a location search preview before sending visitors away from the landing page.

## Brand Alignment

- Primary font: Arial, as requested in the assignment.
- Primary colors follow the supplied Aspira colour guidelines:
  - Aspira Green: `#00BC70`
  - Deep Green: `#163029`
  - Mint: `#DEF0E5`
  - White: `#FFFFFF`
- Web-accessible green variants are used for normal text where needed.

## Production Notes

This is a static prototype for easy review. In production, the RSVP form can be connected to the existing HubSpot form endpoint, a WordPress form plugin, or another CRM workflow.

The `wordpress-template/` folder demonstrates a practical WordPress implementation path:

- `page-aspira-open-house.php` for a reusable landing-page template
- `functions.php` for conditional asset loading and basic event schema
- `style.css` so WordPress can recognize the template folder as a theme structure
- `assets/` for page-specific CSS, JavaScript, and campaign imagery

## What I Did And Why

| What I Added | Why It Helps The Case Study | Why It Fits The Job Posting |
| --- | --- | --- |
| Static coded landing page | Makes the redesign easy for reviewers to open, inspect, and assess quickly | Shows semantic HTML, responsive CSS, and front-end implementation skill |
| Hero RSVP form | Reduces friction by letting high-intent visitors act immediately | Supports marketing campaign execution and lead generation |
| Clear event date cards | Makes the May 29-30 and May 31-June 1 details easier to scan | Shows content clarity and practical page-level improvements |
| Location search preview | Helps users find a relevant residence before submitting the form | Supports usability, website maintenance thinking, and conversion optimization |
| Consent checkbox and reCAPTCHA note | Reflects the compliance/spam-prevention details present in the live form without faking a live integration | Supports regulated-environment awareness, privacy, and publishing QA |
| Compact branded footer | Keeps the page focused with only the Aspira logo, ownership statement, and copyright | Supports the campaign goal without distracting visitors from RSVP |
| Official Aspira logo and campaign assets | Keeps the prototype aligned with supplied brand materials | Shows brand governance and careful use of approved assets |
| Brand color alignment | Uses Aspira Green, Deep Green, Mint, and White from the supplied guidelines | Shows ability to follow design systems and brand standards |
| WordPress-ready template folder | Demonstrates how the design can move from prototype into CMS implementation | Directly maps to the role's WordPress, CMS, template-editing, and publishing responsibilities |
| Event schema example | Adds AI/search-friendly structured data direction | Connects to the posting's AI-ready and semantic markup responsibilities |
| Submission guide | Gives reviewers and stakeholders a clear path to understand the deliverable | Shows documentation and cross-functional communication habits |

## Why This Is The Best Solution

The assessment asks for an improved landing page in any format, while the job posting emphasizes WordPress and CMS execution. A full WordPress build would require a database, hosting, plugins, and migration steps, which can make a take-home harder to review. A React-only build would be polished, but less aligned with the WordPress-heavy responsibilities in the posting.

This hybrid approach is the strongest fit because it gives reviewers an instant live prototype while also showing how the work could be implemented in a WordPress environment.
