<ul class="nav sidebar-nav">
	<li class="{{ active('dashboard') }}">
		<a href="/">Dashboard</a>
	</li>
	<li class="{{ active('clients') }}">
		<a href="/clients">Clients</a>
	</li>
	<li class="{{ active('services/*') }}">
		<a href="/service">Services</a>
	</li>
	<li class="{{ active('invoice') }}">
		<a href="#">Invoices</a>
	</li>
	<li class="{{ active('invoice.create*') }}">
		<a href="/invoice/create">Stripe Test Charge</a>
	</li>
</ul>