<script>
    // Replace the <textarea id="body"> with a Froala
    // instance, using default configuration.
    $('#body, #excerpt').froalaEditor({
      toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable'],
      heightMin: 300,
      imageMove: true,
      toolbarSticky: false,
      imageUploadParam: 'image',
      imageUploadMethod: 'post',
      // Set the image upload URL.
      imageUploadURL: '/fileuploads',
      imageUploadParams: {
        froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
        _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
      },
      fileUploadParam: 'file',
      fileUploadMethod: 'post',
      // Set the image upload URL.
      fileUploadURL: '/fileuploads',
      // Set max file size to 50MB.
      fileMaxSize: 50 * 1024 * 1024,
      
      fileUploadParams: {
      froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
      _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.

      }
    });
</script>