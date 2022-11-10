<div class="form-group">
    <label for="transaction_status">Transaction Status</label>
    <select name="transaction_status" id="transaction_status" class="form-control" required>
        <option>-- Select Transaction Status --</option>
        @foreach($statuses as $id => $status)
            <option value="{{ $id }}"
                {{ isset($transaction) ? ($transaction->transaction_status == $id ? 'selected' : '') : '' }}>
                {{ $status }}
            </option>
        @endforeach
    </select>
</div>