        <x-layout title="Contact Page">
            
            <h1>Contact Job Board</h1>
            <p>You can contact us at <a href="mailto:contact@jobboard.com">contact@jobboard.com</a></p>
            <p>Or fill out the form below:</p>
            <form action="/contact" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
            <p>We will get back to you as soon as possible.</p>
        </x-layout>