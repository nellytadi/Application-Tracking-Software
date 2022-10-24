<div class="mb-3">
    <label for="resume" class="form-label">Upload or Paste Resume <small>(only PDF allowed)</small>
    </label>
    <div class="mb-3">
        <input class="form-control form-control-sm" id="formFileSm"  wire:model="convertPDFToText" type="file">
        @error('convertPDFToText') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div wire:loading wire:target="convertPDFToText" class="text-sm text-gray-500 italic">Uploading...</div>
    <textarea class="form-control" id="resume" rows="12"></textarea>
</div>
