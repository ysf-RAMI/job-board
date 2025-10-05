
    <div>
        <!-- Order your soul. Reduce your wants. - Augustine -->
        <h1>Jobs List</h1>
        <ul>
            @foreach ($jobs as $job)
                <li>{{ $job['title'] }} - {{ $job['Salary'] }}</li>
            @endforeach
        </ul>
    </div>
