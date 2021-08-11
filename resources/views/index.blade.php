<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>上传至CF</title>
</head>
<body>
<form id="form">
    <input type="file" accept="video/*" id="video" />
    <button type="submit">
        Upload Video
    </button>
</form>
<script>
    async function getOneTimeUploadUrl() {
        // The real implementation of this function should make an API call to your server
        // where a unique one-time upload URL should be generated and returned to the browser.
        // Here we will use a fake one that looks real but won't actually work.
        return "{{ $uploadUrl }}";
    }

    const form = document.getElementById("form");
    const videoInput = document.getElementById("video");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const oneTimeUploadUrl = await getOneTimeUploadUrl();
        const video = videoInput.files[0];
        const formData = new FormData();
        formData.append("file", video);
        const uploadResult = await fetch(oneTimeUploadUrl, {
            method: "POST",
            body: formData,
        });
        console.log(uploadResult);
        form.innerHTML = "<h3>Upload successful!</h3>"
    });
</script>
</body>
</html>
