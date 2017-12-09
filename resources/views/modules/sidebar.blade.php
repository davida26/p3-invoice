<ul class="nav sidebar-nav">
	<li class="{{ active('dashboard') }}">
		<a href="/">Dashboard</a>
	</li>
	<li class="{{ active('clients') }}">
		<a href="/clients">Clients</a>
	</li>
	<li class="{{ active('service') }}">
		<a href="/service">Services</a>
	</li>
	<li class="{{ active('invoice') }}">
		<a href="/invoice">Invoices</a>
	</li>
	<li class="{{ active('settings') }}">
		<a href="/settings">Settings</a>
	</li>
	<li class="{{ active('invoice.create*') }}">
		<a href="/invoice/create">Stripe Test Charge</a>
	</li>
</ul>