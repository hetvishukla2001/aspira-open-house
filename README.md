# Aspira National Open House Redesign

A responsive landing-page redesign created for the Aspira National Open House Spring 2026 case study.

## Live Demo

[View the live prototype](https://hetvishukla2001.github.io/aspira-open-house/)

## Project Goals

- Make the event value clear before asking visitors to RSVP
- Keep the RSVP action visible in the first viewport
- Clarify the event dates and residence information
- Improve mobile usability and accessibility
- Follow the supplied Aspira brand guidelines and use Arial as requested

## Key Improvements

- Simplified, conversion-focused hero and RSVP form
- Scannable date cards for the two event schedules
- Clear explanation of what visitors can expect
- Searchable residence preview
- Consent and privacy language based on the existing form
- Responsive layouts and semantic HTML

## WordPress Approach

The live demo is a static HTML/CSS/JavaScript prototype so it can be reviewed without setup. The `wordpress-template/` directory shows how the page could be adapted into a WordPress page template, including conditional asset loading and Event structured data.

## Run Locally

```bash
python3 -m http.server 8000
```

Then visit `http://localhost:8000`.

## Production Considerations

The RSVP form is a front-end prototype. In production, it would connect to the existing HubSpot or WordPress form workflow with server-side validation and spam protection.
