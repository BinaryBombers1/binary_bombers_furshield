<h2>Log Treatment</h2>
<form method="POST" action="{{ route('treatments.store',$appointment) }}">
@csrf
<textarea name="symptoms" placeholder="Symptoms"></textarea>
<textarea name="diagnosis" placeholder="Diagnosis"></textarea>
<textarea name="medication" placeholder="Medication"></textarea>
<textarea name="follow_up" placeholder="Follow-up"></textarea>
<button type="submit">Save</button>
</form>
