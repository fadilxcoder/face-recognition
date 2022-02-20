# Notes

- Fork git repo : https://github.com/MacgyverCode/faceRecognition-PHP.git
- Docker image : https://hub.docker.com/r/macgyvertechnology/face-comparison-model - `docker pull macgyvertechnology/face-comparison-model:2`
- Run : `php comparator`
- Success :
```
Comparing : obama1.jpg v/s obama2.jpg

{"faces": 1, "match": true, "coordinates": [1650, 418, 1096, 973]}
```
- Fail : 
```
Comparing : fx1.jpg v/s obama2.jpg

{"faces": 1, "match": false }
```
