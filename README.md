# image-butler

Super simple image hosting microservice.

## Routing

Image butler does not have a classic url router. This is a microservice, and it should not be used to render
a webpage. So we have the following url structure:

### Uploading

```
// Upload a fix named image
POST /avatars/mr-smith.jpg
{
	"status": "success",
	"path": "/avatars/mr-smith.jpg"
}
```

```
// Upload parameterized
POST /avatars/mr-smith-{time}.png
{
	"status": "success",
	"path": "/avatars/mr-smith-1460647846.png"
}
```

```
// Upload an unmaed image
POST /*
{
	"status": "success",
	"path": "/c02b7d24a066adb747fdeb12deb21bfa.jpg"
}
```

```
// You can still add paths
POST /wallpaper/*
{
	"status": "success",
	"path": "/wallpaper/c02b7d24a066adb747fdeb12deb21bfa.jpg"
}
```

```
// You can also convert the type on upload
POST /thumbs/*.png
{
	"status": "success",
	"path": "/thumbs/c02b7d24a066adb747fdeb12deb21bfa.png"
}
```

### Displaying

```
// Get that specifc image raw
// this can be disabled in your configuration
GET /thumbs/c02b7d24a066adb747fdeb12deb21bfa.png
```

```
// Add a display action
GET /thumbs/c02b7d24a066adb747fdeb12deb21bfa/square250.png
```

Actions must be predefined other wise you would allow 
the user to create any image he wants which might end in a huge mess.

An action can be anything from resizing to filtering to watermarks etc.

### Infos

```
// Add a display action
GET /thumbs/c02b7d24a066adb747fdeb12deb21bfa.json
```

Actions must be predefined other wise you would allow 
the user to create any image he wants which might end in a huge mess.

An action can be anything from resizing to filtering to watermarks etc.

## API 

Image butler does not have a classic url router. This is a microservice, and it should not be used to render
a webpage. So we have the following url structure:

### Retrieving an image

```
// /<image key>.<file extension>
GET /1026-mario-deluna-1457900850-avatar.jpg

// The image key might also be the image hash
GET /c02b7d24a066adb747fdeb12deb21bfa.jpg
```

#### Renditions

Use the underscore `_` seperator in the key to 
tell your butler how the image should be rendered.

```
// /<image key>_<image rendition>.<file extension>
GET /1026-mario-deluna-1457900850-avatar/box256.jpg

// The image rendition can also implement effects 
// like a blur or some insta filter thingy.
GET /c02b7d24a066adb747fdeb12deb21bfa/blur.jpg
```

### Getting image data

To retrieve just the image meta data, just make a GET request 
with the image key without rendition and file extension to the service.

```json
// /<image key>
GET /1026-mario-deluna-1457900850-avatar
{
	"key": "1026-mario-deluna-1457900850-avatar"
	
}
```
