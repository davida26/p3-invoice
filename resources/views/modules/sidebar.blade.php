<ul class="nav sidebar-nav">
	<li class="{{ active('dashboard') }}">
		<a href="/"><i class="fas fa-tasks" aria-hidden="true"></i> Dashboard</a>
	</li>
	<li class="{{ active('clients*') }}">
		<a href="/clients"><i class="fas fa-users"></i> Clients</a>
	</li>
	<li class="{{ active('service*') }}">
		<a href="/service"><i class="fas fa-gavel" aria-hidden="true"></i> Services</a>
	</li>
	<li class="{{ active('invoice*') }}">
		<a href="/invoice"><i class="fas fa-file-alt"></i> Invoices</a>
	</li>
	<li class="{{ active('settings*') }}">
		<a href="/settings"><i class="fas fa-cog" aria-hidden="true"></i> Settings</a>
	</li>
</ul>