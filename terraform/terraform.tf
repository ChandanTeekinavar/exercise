provider "local" {}

resource "local_file" "example" {
  filename = "${path.module}/example.txt"
  content  = "Hello, Terraform! This is an updated content."
}

resource "local_file" "demo" {
  filename = "${path.module}/demo.txt"
  content  = "Hello, Terraform! This is an demo.txt."
}