# image-butler

Super simple image hosting microservice.


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
GET /1026-mario-deluna-1457900850-avatar_box256.jpg

// The image rendition can also implement effects 
// like a blur or some insta filter thingy.
GET /c02b7d24a066adb747fdeb12deb21bfa_blur.jpg
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
